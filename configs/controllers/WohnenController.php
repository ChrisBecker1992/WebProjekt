<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class WohnenController extends Controller
{
    protected $viewFileName = "Wohnen"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {
        $this->view->title = "Wohnen";
        $this->view->username = $this->user->username;

        $this->view->test = "Irgendeinwert";

        // $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}