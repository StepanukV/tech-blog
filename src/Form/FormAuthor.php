<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 19.01.19
 * Time: 13:15
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormAuthor extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'Form-control']
                ]
            )
            ->add(
                'title',
                TextType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'Form-control']
                ]
            )
            ->add(
                'phone',
                TextType::class,
                [
                    'attr' => ['class' => 'Form-control'],
                    'required' => false
                ]
            )
            ->add(
                'facebook',
                TextType::class,
                [
                    'attr' => ['class' => 'Form-control'],
                    'required' => false
                ]
            )
            ->add(
                'github',
                TextType::class,
                [
                    'attr' => ['class' => 'Form-control'],
                    'required' => false
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                    'attr' => ['class' => 'Form-control button'],
                    'label' => 'Become author!'
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Author'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'author_form';
    }
}
