<?php

class NachhilfeModel
{
    public static function getNachhilfeById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM nachhilfe WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getNachhilfeByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM nachhilfe WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $nachhilfeArray = array();

            while($row = $db->fetchObject($result))
            {
                $nachhilfeArray[] = $row;
            }

            return $nachhilfeArray;
        }

        return null;
    }

    public static function createNewNachhilfe($data)
    {
        $db = new Database();

        $sql = "INSERT INTO nachhilfe(userId,coach) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['coach']);
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveNachhilfe($data)
    {
        $db = new Database();

        $sql = "UPDATE nachhilfe SET coach='".$db->escapeString($data['coach'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteNachhilfe($id)
    {
        $db = new Database();

        $sql = "DELETE FROM nachhilfe WHERE id=".intval($id);
        $db->query($sql);
    }
}