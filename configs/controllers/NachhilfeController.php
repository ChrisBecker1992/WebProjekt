<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: tomda
 * Date: 23.06.2017
 * Time: 19:38
 */
class NachhilfeController extends Controller
{
    protected $viewFileName = "Nachhilfe"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {

        $this->view->title = "Nachhilfe";
        $this->view->username = $this->user->username;

        $this->view->coaching = NachhilfeModel::getNachhilfeByUserId($this->user->id);
    }

}