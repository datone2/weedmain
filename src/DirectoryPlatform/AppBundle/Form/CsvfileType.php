<?php 

// src/AppBundle/Form/CsvfileType.php
namespace DirectoryPlatform\AppBundle\Form;

use DirectoryPlatform\AppBundle\Entity\Export;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CsvfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('csvfile', FileType::class, array('label' => 'Import File (CSV file)'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Export::class,
        ));
    }
}