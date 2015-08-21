<?php

class AuthController extends Zend_Controller_Action
{
    public function indexAction(){
        $this->forward('login');
    }

    public function loginAction(){
        $this->view->assign('enabledFooter', false);
        # Création du formulaire
        #Vérification de l'existence d'un POST
            # Récupération des données
            # Validation des données avec le formulaire
                # Validation des identifiants
                    # Connection de l'utilisateur
                    # Sauvegarde en session

                    # Redirection en cas d'erreur

    }

    public function logoutAction(){
        # Suppression de la session
        # Redirection de l'utilisateur
    }
}