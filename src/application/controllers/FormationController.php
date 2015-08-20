<?php

class FormationController extends Zend_Controller_Action
{
    public function indexAction() {
        $this->forward('read');
    }

    public function createAction() {
        # Cr�ation du formulaire
        # R�cup�ration des donn�es
        # Validation des donn�es avec le formulaire
        # Enregistrement des donn�es
    }

    public function readAction() {
        $experiences = array(
            1 => array(
                'name' => "Formateur - D�veloppeur web",
                'business' => "Ecole IPSSI - Groupe IP-Formation",
                'begin' => "02/2014", 'end' => "now",
                'description' => null),
            2 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "Lorenz & Hamilton Group",
                'begin' => "08/2012", 'end' => "01/2014",
                'description' => "D�veloppement web sur Zend Framework"),
            3 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "Core-Techs",
                'begin' => "08/2011", 'end' => "07/2012",
                "description" => "D�veloppement web sur Zend Framework"),
            4 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "dealCOM",
                'begin' => "07/2010", 'end' => "07/2011",
                "description" => "D�veloppement web PHP from Scratch"),
        );
        $this->view->assign('experiences', $experiences);

        $educations = array(
            1 => array(
                'name' => 'D�veloppeur Web',
                'business' => 'IP-Formation',
                'begin' => "2010", 'end' => "2011",
            ),
            2 => array(
                'name' => 'DUT Informatique',
                'business' => 'IUT Amiens',
                'begin' => "2006", 'end' => "2008",
                'description' => 'Options : G�nie Informatique'
            )
        );
        $this->view->assign('educations', $educations);
    }

    public function updateAction() {
        # Cr�ation du formulaire
        # R�cup�ration de l'identifiant
        # R�cup�ration de l'enregistrement
        # Hydratation du formulaire
        # R�cup�ration des donn�es
        # Validation des donn�es avec le formulaire
        # Enregistrement des donn�es
    }

    public function deleteAction() {
        # R�cup�ration de l'identifiant
        # R�cup�ration de l'enregistrement
        # Suppression de l'enregistrement
    }
}