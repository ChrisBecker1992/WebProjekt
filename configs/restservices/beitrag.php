<?php

class Beitrag extends RESTClass
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
            $view = new View('BeitragFormular');

            $id = null;

            $dataForView = array();

            if(isset($data['id'])) {

                $model = $this->getModelForCategory($data['category']);

                $dataForView = (array) $model->getBeitragById($data['id']);

                $dataForView['category'] = $data['category'];

                $dataForView['beitrag'] = $dataForView['wohnung']; //| 'coach' | 'veranstaltungen' | 'topic'];    //für alle Seiten erstellen

            }

            $view->setData($dataForView);

            $json= new JSON();
            $json->result = true;
            $json->setData(array('view' => $view->parse()));
            $json->send();
        }
    }

    protected function getModelForCategory($category)
    {
        switch($category)
        {
            case 'wohnen': $model = new WohnenModel(); break;
            case 'nachhilfe': $model = new NachhilfeModel(); break;
            case 'veranstaltungen': $model = new VeranstaltungModel(); break;
            case 'auslandssemester': $model = new AuslandModel(); break;
            default: $model = null;
        }

        return $model;
    }

    protected function createRequest($data)
    {
        //post
        //var_dump($data);

        //Datenbank speichern
        if(isset($data['contribution']))
        {
            $user = new User();

            $model = null;

            //Werte in der Datenbankspeichern
            $model = $this->getModelForCategory($data['category']);

            if($model !== null)
            {
                $model->createNewBeitrag(array(
                    'userId' => $user->id,
                    'beitrag' => $data['contribution']
                ));

                //bescheid sagen - hat geklappt
                $json= new JSON();
                $json->result = true;
                $json->send();

            }


        }

    }

    protected function saveRequest($data)
    {
        //put

        if(isset($data['contribution']))
        {

            $model = null;

            $model = $this->getModelForCategory($data['category']);

            if ($model !== null)
            {
                $model->updateBeitrag(array(
                    'wohnung' => $data['contribution'],
                    'id' => $data['id']
                ));

                //bescheid sagen - Beitrag wurde bearbeitet
                $json = new JSON();
                $json->result = true;
                $json->send();
            }
        }
    }

    protected function deleteRequest($data)
    {
        if(isset($data['contribution']))
        {
            $user = new User();

            $model = null;

            //Werte in der Datenbankspeichern
            $model = $this->getModelForCategory($data['category']);

            if($model !== null)
            {
                $model->deleteBeitrag(array(
                    'userId' => $this->delete('id')
                ));

                //bescheid sagen - hat geklappt
                $json= new JSON();
                $json->result = true;
                $json->send();

            }


        }

    }
}