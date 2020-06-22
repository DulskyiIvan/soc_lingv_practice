<?php

namespace App\Form;

use App\Entity\Questionary;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('liveLocation', null, ['label' => 'Місце проживання'])
            ->add('nationality', null, ['label' => 'Національність'])
            ->add('sex', ChoiceType::class, ['label' => 'Стать',
//                'expanded'=>'true',
//                'multiple'=>'false',
                'choices' => ['чоловіча' => 'm', 'жіноча' => 'w']])
            ->add('birthYear', DateType::class, [
                'label' => 'Рік народження',
                'widget'=>'choice',
                'days'=>[1],
                'months'=>[1],
                'years'=>range(date("Y"), 1900)
            ])
            ->add('education', ChoiceType::class, ['label' => 'Освіта',
                'choices' => [
                    'незакінчена середня' => 'unfinished_middle',
                    'середня' => 'middle',
                    'середня спеціальна' => 'special_middle',
                    'незакінчена вища' => 'unfinished_high',
                    'вища гуманітарна' => 'human_high',
                    'вища негуманітарна' => 'not_human_high'
                ]])
            ->add('profession', null, ['label' => 'Професія'])
            ->add('socialityState', ChoiceType::class, ['label' => 'Соціальний стан',
                'choices' => [
                    'робітник' => 'worker',
                    'колгоспник' => 'farmer',
                    'службовець' => 'staff',
                    'учень' => 'student',
                    'пенсіонер' => 'pensioner'
                ]])
            ->add('nativeLanguage', ChoiceType::class, ['label' => 'Рідна мова',
                'choices' => [
                    'українська' => 'ukrainian',
                    'російська' => 'russian',
                    'інша' => 'other'
                ]])
            ->add('whereAreYouLongTermLived', null, ['label' => 'Де Ви жили найбільш тривалий час?'])
            ->add('fatherLanguage', null, ['label' => 'Якою мовою розмовляє (розмовляв) батько?'])
            ->add('matherLanguage', null, ['label' => 'Якою мовою розмовляє (розмовляла) мати?'])
            ->add('ageStartStudyRussian', null, ['label' => 'З якого віку Ви почали цілеспрямовано вивчати російську мову?'])
            ->add('ageStartStudyUkrainian', null, ['label' => 'З якого віку Ви почали цілеспрямовано вивчати українську мову?'])
            ->add('languageBeforeSchool', null, ['label' => 'Якою мовою Ви розмовляли до школи?'])
            ->add('languageInSchool', null, ['label' => 'Якою мовою велись заняття в школі?'])
            ->add('ukrainianLanguageLevel', ChoiceType::class, ['label' => 'В якій мірі Ви володієте українською мовою?',
                'choices' => ['добре' => 'good', 'не дуже добре' => 'not_good']])
            ->add('russianLanguageLevel', ChoiceType::class, ['label' => 'В якій мірі Ви володієте російською мовою?',
                'choices' => ['добре' => 'good', 'не дуже добре' => 'not_good']])
            ->add('needStudyRussianInSchool', ChoiceType::class, ['label' => 'Чи потрібно вивчати російську мову в школі?',
                'choices' => ['так' => 'yes', 'ні' => 'no', 'не знаю' => 'dont_know', 'важко відповісти' => 'difficult_say']])
            ->add('priorityLanguageInFamily', ChoiceType::class, ['label' => 'Якою мовою Ви переважно спілкуєтесь в родині?',
                'choices' => [
                    'українська' => 'ukrainian',
                    'російська' => 'russian',
                    'інша' => 'other'
                ]])
            ->add('priorityLanguageWithFriends', ChoiceType::class, ['label' => 'Якою мовою Ви переважно спілкуєтесь з друзями, знайомими?',
                'choices' => [
                    'українська' => 'ukrainian',
                    'російська' => 'russian'
                ]])
            ->add('tokenOfChooseInformation', ChoiceType::class, ['label' => 'За якими ознаками Ви обираєте книжки, телепередачі?',
                'choices' => [
                    'за змістом' => 'by_content',
                    'за мовою' => [
                        'українська' => 'ukrainian',
                        'російська' => 'russian'
                    ]
                ]])
            ->add('languageWithUnknown', ChoiceType::class, ['label' => 'Якою мовою Ви звертаєтесь до незнайомої людини?',
                'choices' => [
                    'українська' => 'ukrainian',
                    'російська' => 'russian'
                ]])
            ->add('practicant');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Questionary::class,
        ]);
    }
}
