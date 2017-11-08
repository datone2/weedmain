<?php
namespace DirectoryPlatform\AppBundle\Command;

use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\AppBundle\Entity\Category;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManager;

class CsvImportCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(EntityManager $em)
    {
        parent::__construct();

        $this->em = $em;
    }

    protected function configure()
    {
        $this->setName('directory-platform:csv:import');
        $this->setDescription('Import a mock CSV file');
        $this->addArgument('csv-file', InputArgument::REQUIRED, 'give import csv file-name which should be in AppBundle/Data directory');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $csv_filename = $input->getArgument('name');

        $io = new SymfonyStyle($input, $output);
        
        $io->title('Attempting to import feed...');

        $reader = Reader::createFromPath('%kernel.root_dir%/../src/DirectoryPlatform/AppBundle/Data/'.$csv_filename);

        // https://github.com/thephpleague/csv/issues/208
        $results = $reader->fetchAssoc();
        $i=0;
        foreach ($results as $row) {
            $address = trim($row['Address'].' '.$row['City'].' '.$row['State'].' '.$row['Zip']);

            if($address == ''){
                $address = 'address not found';
            } 

            $athlete = new Listing();
            $athlete->setName($row['Business Name']);
                //->setType($row['Business Type'])
                $athlete->setAddress($address);
                $athlete->setOpeningHours($row['Hours of Operation/Days Open']);
                $athlete->setCreated(new \DateTime());
                $athlete->setModified(new \DateTime());
                //->setUserId()
            ;

            $this->em->persist($athlete);

            // do a lookup for existing Competitor matching some combination of fields
            $competitor = $this->em->getRepository('AppBundle:Category')
            ->findOneBy([
                'name' => $row['Business Type']
            ]);

            if ($competitor === null) {

                $competitor = new Category();
                $competitor->setName($row['Business Type']);
                $competitor->setSlug($row['Business Type'].'-'.$i);
                //$competitor->setCreated(new \DateTime())
                ;

                $this->em->persist($competitor);
                $this->em->flush();
            }
            $athlete->setCategory($competitor);
            $i++;
        }
        $this->em->flush();

        $io->success('Command exited cleanly!');
    }
}