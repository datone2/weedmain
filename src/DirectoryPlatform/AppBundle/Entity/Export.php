<?php 
// src/AppBundle/Entity/Export.php
namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Export
{
    // ...

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the export file as a CSV file.")
     */
    private $csvfile;

    public function getCsvfile()
    {
        return $this->csvfile;
    }

    public function setCsvfile($csvfile)
    {
        $this->csvfile = $csvfile;

        return $this;
    }
}