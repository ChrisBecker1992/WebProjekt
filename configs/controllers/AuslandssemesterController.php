<?php
/**
 * Created by PhpStorm.
 * User: Shunko
 * Date: 23.06.2017
 * Time: 19:30
 */
class AuslandssemesterController extends Controller
{
    protected $viewFileName = "Auslandssemester"; //this will be the View that gets the data...
    protected $loginRequired = true;


    public function run()
    {

        $this->view->title = "Auslandssemester";
        $this->view->username = $this->user->username;

        $this->view->ausland = AuslandModel::getAuslandByUserId($this->user->id);

    }

}