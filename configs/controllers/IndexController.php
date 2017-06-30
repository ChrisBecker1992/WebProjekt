<?php

class IndexController extends Controller
{
    protected $viewFileName = "Startseite"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;
    }

}