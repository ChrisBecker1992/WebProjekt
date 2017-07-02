<?php
/**
 * Created by PhpStorm.
 * User: tomda
 * Date: 22.06.2017
 * Time: 15:20
 */

class HabitationController extends Controller
{
    protected $viewFileName = "Wohnen"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Wohnen";
        $this->view->username = $this->user->username;
        $this->view->currentUserId = $this->user->id;

        $this->view->allHabitations = HabitationModel::getAllHabitations();
    }

}