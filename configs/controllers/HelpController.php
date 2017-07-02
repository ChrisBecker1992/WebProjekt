<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: tomda
 * Date: 23.06.2017
 * Time: 19:38
 */
class HelpController extends Controller
{
    protected $viewFileName = "Nachhilfe"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Nachhilfe";
        $this->view->username = $this->user->username;
        $this->view->currentUserId = $this->user->id;

        $this->view->allHelp = HelpModel::getAllHelp();
    }

}