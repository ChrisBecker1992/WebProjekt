<?php

class Coaching extends RESTClass
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
            $view = new View('coaching');

            if(isset($data['id']))
            {
                $dataForView = NachhilfeModel::getNachhilfeById($data['id']);
                $user = new User();

                if($dataForView->userId = $user->id)
                {
                    //ok - its your Nachhilfe!

                    //load old values
                    $view->setData((array) $dataForView);

                    $jsonResponse = new JSON();
                    $jsonResponse->result = true;
                    $jsonResponse->setData(array('html' => $view->parse()));
                    $jsonResponse->send();
                }
                else
                {
                    //its not your Nachhilfe!
                    $jsonResponse = new JSON();
                    $jsonResponse->result = false;
                    $jsonResponse->setMessage('You tried to edit an Nachhilfe that doesn\'t belong to you! No chance!');
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
        $requiredFields = array('coach');

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

            NachhilfeModel::createNewNachhilfe($data);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('Nachhilfe created!');
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
        $requiredFields = array('coach');

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
            $nachhilfeObj = NachhilfeModel::getNachhilfeById($data['id']);

            if($nachhilfeObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to save/edit that Nachhilfe!");
                $jsonResponse->send();
            }
            else
            {
                NachhilfeModel::saveNachhilfe($data);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Nachhilfe saved!');
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
            $nachhilfeObj = NachhilfeModel::getNachhilfeById($data['id']);

            if($nachhilfeObj->userId != $user->id)
            {
                $jsonResponse = new JSON();
                $jsonResponse->result = false;
                $jsonResponse->setMessage("You're not allowed to delete that Nachhilfe!");
                $jsonResponse->send();
            }
            else
            {
                NachhilfeModel::deleteNachhilfe($nachhilfeObj->id);

                $jsonResponse = new JSON();
                $jsonResponse->result = true;
                $jsonResponse->setMessage('Nachhilfe deleted!');
                $jsonResponse->send();
            }
        }

    }
}