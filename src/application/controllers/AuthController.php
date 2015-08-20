<?php

class AuthController extends Zend_Controller_Action
{
    public function indexAction(){
        $this->forward('login');
    }

    public function loginAction(){
        # Création du formulaire
        # Récupération des données
        # Validation des données avec le formulaire
        # Validation des identifiants
        # Connection de l'utilisateur
        # Sauvegarde en session
    }

    public function logoutAction(){
        # Suppression de la session
        # Redirection de l'utilisateur
    }
}