<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class IndexController extends Controller
{
    protected $viewFileName = "Startseite"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {

        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;

        // $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}