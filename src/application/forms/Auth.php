<?php
class Form_Auth extends Zend_Form
{
    public function init()
    {

        $this->addElement('text', 'username', array(
            'placeholder' => 'Identifiant',
            'class' => 'form-control'
        ));
        $this->getElement('username')->setRequired(true);

        $this->addElement('password', 'password', array(
            'placeholder' => 'Mot de passe',
            'class' => 'form-control'
        ));
        $this->getElement('password')->setRequired(true);

        $this->addElement('submit', 'send', array(
            'class' => 'btn btn-lg btn-primary btn-block',
            'label' => 'Sign in'
        ));
    }
}