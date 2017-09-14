<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

/**
 * Class ProjectType
 *
 * @package AppBundle\Form
 */
class ProjectType extends AbstractType
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array                                        $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year',           IntegerType::class)
            ->add('name',           TextType::class)
            ->add('description',    TextareaType::class)
            ->add(
                'imageFile',
                VichFileType::class,
                [
                    'required' => true,
                ])
            ->add('skills',         EntityType::class, array(
                'class'             =>      'AppBundle\Entity\Skill',
                'choice_label'      =>      'name',
                'multiple'          =>      true,
                'required'          =>      false,
            ))
            ->add('experience',     EntityType::class,array(
                'class'             =>      'AppBundle\Entity\Experience',
                'choice_label'      =>      'name',
                'multiple'          =>      false,
                'required'          =>      false,
            ))
            ->add('save',           SubmitType::class)
            ->getForm();
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event){
                $training = $event->getData();
                if (null === $training) {
                    return;
                }
            }
        );
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'    =>  'AppBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'crud-projects';
    }
}