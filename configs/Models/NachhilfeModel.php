<?php

class NachhilfeModel
{

    public static function getBeitragById($id)
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

    //create new Contribution to the Database
    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO nachhilfe(userId,coach) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE nachhilfe SET coach='".$db->escapeString($data['coach'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM nachhilfe WHERE id=".intval($id);
        $db->query($sql);
    }
}