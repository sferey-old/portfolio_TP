<?php

class FormationController extends Zend_Controller_Action
{
    public function indexAction() {
        $this->forward('read');
    }

    public function createAction() {
        # Création du formulaire
        # Récupération des données
        # Validation des données avec le formulaire
        # Enregistrement des données
    }

    public function readAction() {
        $experiences = array(
            1 => array(
                'name' => "Formateur - Développeur web",
                'business' => "Ecole IPSSI - Groupe IP-Formation",
                'begin' => "02/2014", 'end' => "now",
                'description' => null),
            2 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "Lorenz & Hamilton Group",
                'begin' => "08/2012", 'end' => "01/2014",
                'description' => "Développement web sur Zend Framework"),
            3 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "Core-Techs",
                'begin' => "08/2011", 'end' => "07/2012",
                "description" => "Développement web sur Zend Framework"),
            4 => array(
                'name' => "Analyste Programmeur Web",
                'business' => "dealCOM",
                'begin' => "07/2010", 'end' => "07/2011",
                "description" => "Développement web PHP from Scratch"),
        );
        $this->view->assign('experiences', $experiences);

        $educations = array(
            1 => array(
                'name' => 'Développeur Web',
                'business' => 'IP-Formation',
                'begin' => "2010", 'end' => "2011",
            ),
            2 => array(
                'name' => 'DUT Informatique',
                'business' => 'IUT Amiens',
                'begin' => "2006", 'end' => "2008",
                'description' => 'Options : Génie Informatique'
            )
        );
        $this->view->assign('educations', $educations);
    }

    public function updateAction() {
        # Création du formulaire
        # Récupération de l'identifiant
        # Récupération de l'enregistrement
        # Hydratation du formulaire
        # Récupération des données
        # Validation des données avec le formulaire
        # Enregistrement des données
    }

    public function deleteAction() {
        # Récupération de l'identifiant
        # Récupération de l'enregistrement
        # Suppression de l'enregistrement
    }
}