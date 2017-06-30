<?php

class WohnenModel
{
    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM wohnen WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getWohnenByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM wohnen WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $wohnenArray = array();

            while($row = $db->fetchObject($result))
            {
                $wohnenArray[] = $row;
            }

            return $wohnenArray;
        }

        return null;
    }

    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO wohnen(userId,wohnung) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE wohnen SET wohnnung='".$db->escapeString($data['wohnnung'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM wohnen WHERE id=".intval($id);
        $db->query($sql);
    }
}