<?php

class Habitation extends RESTClass
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
            $view = new View('habitation');

            if(isset($data['id']))
            {
                $dataForView = WohnenModel::getWohnenById($data['id']);
                $user = new User();

                if($dataForView->userId = $user->id)
                {
                    //ok - its your Wohnen!

                    //load old values
                    $view->setData((array) $dataForView);

                    $jsonResponse = new JSON();
                    $jsonResponse->result = true;
                    $jsonResponse->setData(array('html' => $view->parse()));
                    $jsonResponse->send();
                }
                else
                {
                    //its not your Wohnen!
                    $jsonResponse = new JSON();
                    $jsonResponse->result = false;
                    $jsonResponse->setMessage('You tried to edit an Wohnen that doesn\'t belong to you! No chance!');
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
        $requiredFields = array('wohnung');

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

            WohnenModel::createNewWohnen($data);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('Wohnen created!');
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
        $requiredFields = array('wohnung');

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
            $wohnenObj = WohnenModel::getWohnenById($data['id']);

            if($wohnenObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to save/edit that Wohnen!");
                $jsonResponse->send();
            }
            else
            {
                WohnenModel::saveWohnen($data);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Wohnen saved!');
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
            $wohnenObj = WohnenModel::getWohnenById($data['id']);

            if($wohnenObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to delete that Wohnen!");
                $jsonResponse->send();
            }
            else
            {
                WohnenModel::deleteWohnen($wohnenObj->id);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Wohnen deleted!');
                $jsonResponse->send();
            }
        }

    }
}