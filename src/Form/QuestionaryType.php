<?php

namespace App\Form;

use App\Entity\Questionary;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('liveLocation')
            ->add('nationality')
            ->add('sex')
            ->add('birthYear')
            ->add('education')
            ->add('profession')
            ->add('socialityState')
            ->add('nativeLanguage')
            ->add('whereAreYouLongTermLived')
            ->add('fatherLanguage')
            ->add('matherLanguage')
            ->add('ageStartStudyRussian')
            ->add('ageStartStudyUkrainian')
            ->add('languageBeforeSchool')
            ->add('languageInSchool')
            ->add('ukrainianLanguageLevel')
            ->add('russianLanguageLevel')
            ->add('needStudyRussianInSchool')
            ->add('priorityLanguageInFamily')
            ->add('priorityLanguageWithFriends')
            ->add('tokenOfChooseInformation')
            ->add('languageWithUnknown')
            ->add('practicant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Questionary::class,
        ]);
    }
}
