<?php

declare(strict_types=1);

namespace Meetup\Form;

use Zend\Form\Element;
use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Validator\StringLength;

class MeetupForm extends Form implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('meetup'); 

        $this->add([
            'type' => Element\Text::class,
            'name' => 'title',
            'options' => [
                'label' => 'Titre',
            ],
            'attributes' => [
                    'class' => 'form-control',
            ],
        ]);

        $this->add([
            'type' => Element\Text::class,
            'name' => 'description',
            'options' => [
                'label' => 'Description',
            ],
            'attributes' => [
                    'class' => 'form-control',
            ],
        ]);

        $this->add([
                'type' => Element\Text::class,
                'name' => 'dateStart',
                'options' => [
                        'label' => 'Date de début',
                ],
                'attributes' => [
                        'class' => 'form-control',
                        'id' => 'datetimepicker1',
                ],
        ]);

        $this->add([
                'type' => Element\Text::class,
                'name' => 'dateEnd',
                'options' => [
                        'label' => 'Date de fin',
                ],
                'attributes' => [
                        'class' => 'form-control',
                        'id' => 'datetimepicker2',
                ],
        ]);

        $this->add([
            'type' => Element\Submit::class,
            'name' => 'submit',
            'attributes' => [
                'value' => 'Submit',
                'class' => 'btn btn-primary',
            ],
        ]);

    }

    public function getInputFilterSpecification()
    {
        return [
            'title' => [
                'validators' => [
                    [
                        'name' => StringLength::class,
                        'options' => [
                            'min' => 2,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
        ];
    }
}
