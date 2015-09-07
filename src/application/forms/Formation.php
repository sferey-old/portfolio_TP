<?php
class Form_Formation extends Zend_Form
{
    public function init()
    {
        $this->addElement('radio' , 'type', array(
            'label' => 'Type'
        ));

        $this->getElement('type')->addMultiOptions(array(
            '0' => 'Formation',
            '1' => 'Experience'
        ));

        $this->addElement('text', 'name', array(
            'placeholder' => 'Intitulé',
            'class' => 'form-control'
        ));

        $this->addElement('text', 'business', array(
            'placeholder' => 'Entreprise / Ecole',
            'class' => 'form-control'
        ));

        $this->addElement('text', 'begin', array(
            'placeholder' => 'Début de la formation',
            'class' => 'form-control'
        ));

        $this->addElement('text', 'end', array(
            'placeholder' => 'Fin de la formation',
            'class' => 'form-control'
        ));

        $this->addElement('textarea', 'description', array(
            'placeholder' => 'Description',
            'class' => 'form-control'
        ));

        $this->addElement('submit', 'send', array(
            'class' => 'btn btn-lg btn-primary btn-block',
            'label' => 'Sign in'
        ));
    }
}