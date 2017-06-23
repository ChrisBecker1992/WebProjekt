<?php
/**
 * Created by PhpStorm.
 * User: Shunko
 * Date: 23.06.2017
 * Time: 19:29
 */
class VeranstaltungenController extends Controller
{
    protected $viewFileName = "Veranstaltungen"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;

        $this->view->veranstaltung = VeranstaltungModel::getVeranstaltungByUserId($this->user->id);
    }

}