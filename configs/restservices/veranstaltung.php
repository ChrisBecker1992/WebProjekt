<?php

class Veranstaltung extends RESTClass
{
    private $Database = null;

    public function __construct()
    {
        $this->Database = new Database();
    }

    public function __destruct()
    {
        $this->Database = null;
    }

    protected function getRequest($data)
    {
        if(isset($data['returnView']) && $data['returnView'])
        {
            $view = new View('veranstaltung');

            if(isset($data['id']))
            {
                $dataForView = VeranstaltungModel::getVeranstaltungById($data['id']);
                $user = new User();

                if($dataForView->userId = $user->id)
                {
                    //ok - its your Veranstaltung!

                    //load old values
                    $view->setData((array) $dataForView);

                    $jsonResponse = new JSON();
                    $jsonResponse->result = true;
                    $jsonResponse->setData(array('html' => $view->parse()));
                    $jsonResponse->send();
                }
                else
                {
                    //its not your Veranstaltung!
                    $jsonResponse = new JSON();
                    $jsonResponse->result = false;
                    $jsonResponse->setMessage('You tried to edit an Veranstaltung that doesn\'t belong to you! No chance!');
                    $jsonResponse->send();
                }
            }
            else
            {
                //new
                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setData(array('html' => $view->parse()));
                $jsonResponse->send();
            }
        }
    }

    protected function createRequest($data)
    {
        $requiredFields = array('veranstaltungen');

        $error = false;
        $errorFields = array();
        $user = new User();

        foreach($requiredFields as $fieldname)
        {
            if(!isset($data[$fieldname]) || $data[$fieldname] == "")
            {
                $error = true;
                $errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
            }
        }

        if(!$error)
        {
            $data['userId'] = $user->id;

            VeranstaltungModel::createNewVeranstaltung($data);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('Veranstaltung created!');
            $jsonResponse->send();
        }
        else
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();
        }

    }

    protected function saveRequest($data)
    {
        $requiredFields = array('veranstaltungen');

        $error = false;
        $errorFields = array();
        $user = new User();

        foreach($requiredFields as $fieldname)
        {
            if(!isset($data[$fieldname]) || $data[$fieldname] == "")
            {
                $error = true;
                $errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
            }
        }

        if(!$error)
        {
            $veranstaltungObj = VeranstaltungModel::getVeranstaltungById($data['id']);

            if($veranstaltungObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to save/edit that Veranstaltung!");
                $jsonResponse->send();
            }
            else
            {
                VeranstaltungModel::saveVeranstaltung($data);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Veranstaltung saved!');
                $jsonResponse->send();
            }

        }
        else
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();
        }
    }

    protected function deleteRequest($data)
    {
        $user = new User();

        if(!isset($data['id']))
        {
            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setMessage("Can't delete - id is missing!");
            $jsonResponse->send();
        }
        else
        {
            $veranstaltungObj = VeranstaltungModel::getVeranstaltungById($data['id']);

            if($veranstaltungObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to delete that Veranstaltung!");
                $jsonResponse->send();
            }
            else
            {
                VeranstaltungModel::deleteVeranstaltung($veranstaltungObj->id);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Veranstaltung deleted!');
                $jsonResponse->send();
            }
        }

    }
}