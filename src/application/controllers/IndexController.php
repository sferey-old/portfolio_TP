<?php

class IndexController extends Zend_Controller_Action
{
    public function indexAction(){

        $profile = array(
            'name'  => "St�phane F�REY",
            'slogan'=> "Genius developper",
            'leads' => array(
                1 => "I am a Genius Back End Developer.",
                2 => "I want to know new Technology Web",
                3 => "I can express my creativity",
                4 => "And I'm looking for a new contract right now."
            ));

        $this->view->assign($profile);
    }
}