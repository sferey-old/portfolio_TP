<?php

class AuthController extends Zend_Controller_Action
{
    public function indexAction(){
        $this->forward('login');
    }

    public function loginAction(){
        $this->view->assign('enabledFooter', false);
        # Création du formulaire
        $form = new Form_Auth();
        $this->view->assign('form', $form);

        #Vérification de l'existence d'un POST
        if ($this->getRequest()->isPost()) {
            # Récupération des données
            $data = $this->getRequest()->getPost();
            # Validation des données avec le formulaire
            if ($form->isValid($data)) {
                $username = $form->getValue('username');
                $password = $form->getValue('password');

                # Validation des identifiants
                if($username == 'admin' && $password == 'admin'){
                    # Connection de l'utilisateur
                    $this->view->logged = true;
                    # Sauvegarde en session
                } else {
                    # Redirection en cas d'erreur
                    $this->redirect('/');
                }

            }
        }

    }

    public function logoutAction(){
        # Suppression de la session

        # Redirection de l'utilisateur
        $this->redirect('/');
    }
}