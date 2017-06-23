<?php
/**
 * Created by PhpStorm.
 * User: Shunko
 * Date: 23.06.2017
 * Time: 19:30
 */
class IndexController extends Controller
{
    protected $viewFileName = "Auslandssemester"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Übersicht";
        $this->view->username = $this->user->username;

        // $this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
    }

}