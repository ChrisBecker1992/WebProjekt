<?php

class Ausland extends RESTClass
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
            $view = new View('ausland');

            if(isset($data['id']))
            {
                $dataForView = AuslandModel::getAuslandById($data['id']);
                $user = new User();

                if($dataForView->userId = $user->id)
                {
                    //ok - its your ausland!

                    //load old values
                    $view->setData((array) $dataForView);

                    $jsonResponse = new JSON();
                    $jsonResponse->result = true;
                    $jsonResponse->setData(array('html' => $view->parse()));
                    $jsonResponse->send();
                }
                else
                {
                    //its not your ausland!
                    $jsonResponse = new JSON();
                    $jsonResponse->result = false;
                    $jsonResponse->setMessage('You tried to edit an ausland that doesn\'t belong to you! No chance!');
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
        $requiredFields = array('topic');

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

            AuslandModel::createNewAusland($data);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('Ausland created!');
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
        $requiredFields = array('topic');

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
            $auslandObj = AuslandModel::getAuslandById($data['id']);

            if($auslandObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to save/edit that ausland!");
                $jsonResponse->send();
            }
            else
            {
                AuslandModel::saveAusland($data);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Ausland saved!');
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
            $auslandObj = AuslandModel::getAuslandById($data['id']);

            if($auslandObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to delete that ausland!");
                $jsonResponse->send();
            }
            else
            {
                AuslandModel::deleteAusland($auslandObj->id);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('ausland deleted!');
                $jsonResponse->send();
            }
        }

    }
}