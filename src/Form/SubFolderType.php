<?php

namespace App\Form;

use App\Entity\SubFolder;
use App\DOI\AddSubFolderRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubFolderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('level')/* 
            ->add('dateCreated')
            ->add('dateLastUpdate') */
            ->add('subFolder')/* 
            ->add('subFolder_2')
            ->add('subFolder_3')
            ->add('subFolder_4') */
            ->add('Folder')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddSubFolderRequest::class,
        ]);
    }
}
