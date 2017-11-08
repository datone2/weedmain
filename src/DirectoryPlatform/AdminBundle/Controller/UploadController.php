<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;

use DirectoryPlatform\AppBundle\Entity\Export;
use DirectoryPlatform\AppBundle\Form\CsvfileType;
use DirectoryPlatform\AppBundle\Entity\Listing;
use DirectoryPlatform\AppBundle\Entity\Category;
use League\Csv\Reader;
use Doctrine\ORM\EntityManager;


class UploadController extends Controller
{
    /**
     * @Route("/upload", name="app_category_upload")
     */
    public function uploadAction(Request $request)
    {
        $product = new Export();
        $form = $this->createForm(CsvfileType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $product->getCsvfile();

            // Generate a unique name for the file before saving it
            //$fileName = md5(uniqid()).'.'.$file->guessExtension();
            $fileName = date('m-d-Y-H:i:s').$file->getClientOriginalName();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('upload_csv_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setCsvfile($fileName);

            // ... persist the $product variable or any other work

            //return $this->redirect($this->generateUrl('app_product_list'));
	    echo "Successfully uploaded csv file";
        }

        
        return $this->render('AdminBundle::Listing/export.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/import-csv/{csv_filename}", defaults={"csv_filename" = 0}, name="app_category_import")
     */
    public function importCsvAction($csv_filename)
    {
	/*$kernel = $this->get('kernel');

        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput(array(
           'command' => 'directory-platform:import:csv',
           '--csv-file' => $csv_filename,
        ));
        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();
*/
	$em = $this->getDoctrine()->getManager();

	$reader = Reader::createFromPath($this->get('kernel')->getRootDir().'/../src/DirectoryPlatform/AppBundle/Data/'.$csv_filename);

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

            $em->persist($athlete);

            // do a lookup for existing Competitor matching some combination of fields
            $competitor = $em->getRepository('AppBundle:Category')
            ->findOneBy([
                'name' => $row['Business Type']
            ]);

            if ($competitor === null) {

                $competitor = new Category();
                $competitor->setName($row['Business Type']);
                $competitor->setSlug($row['Business Type'].'-'.$i);
                //$competitor->setCreated(new \DateTime())
                ;

                $em->persist($competitor);
                $em->flush();
            }
            $athlete->setCategory($competitor);
            $i++;
        }
        $em->flush();

        // return new Response(""), if you used NullOutput()
        echo 'CSV imported successfully';
	return $this->redirectToRoute('app_category_list_csv');
    }

    /**
     * @Route("/list-csv", name="app_category_list_csv")
     */
    public function listCsvAction()
    {

        $directory = $this->get('kernel')->getRootDir().'/../src/DirectoryPlatform/AppBundle/Data/';
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));

        return $this->render('AdminBundle::Listing/listcsv.html.twig', array(
            'dirs' => $scanned_directory,
        ));
    }
}