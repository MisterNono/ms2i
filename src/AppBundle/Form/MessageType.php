<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MessageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'required' => true,
                'attr' => array(
                    "class" => "form-control",
                    "placeholder" => "Votre nom et prénom",
                    "title" => "Indiquez votre nom et prénom"
                ),
            ))
            ->add('mail', EmailType::class, array(
                'required' => true,
                'attr' => array(
                    "class" => "form-control",
                    "placeholder" => "Votre mail",
                    "title" => "Indiquez votre mail de contact",
                ),
            ))
            ->add('sujet', TextType::class, array(
                'required' => true,
                'attr' => array(
                    "class" => "form-control",
                    "placeholder" => "Objet de votre mail",
                    "title" => "Objet de votre mail",
                ),
            ))
            ->add('message', TextareaType::class, array(
                'required' => true,
                'attr' => array(
                    'class' => "form-control ckeditor",
                    'rows' => 6,
                    "placeholder" => "Votre message",
                    "title" => "Votre message",
                    ),
                ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Envoyer',
                'attr' => array(
                    "class" => "btn btn-primary",
                ),
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_message';
    }


}
