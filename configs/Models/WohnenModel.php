<?php

class WohnenModel
{
    public static function getWohnenById($id)
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

    public static function createNewWohnen($data)
    {
        $db = new Database();

        $sql = "INSERT INTO wohnen(userId,wohnnung) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['wohnnung']);
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveWohnen($data)
    {
        $db = new Database();

        $sql = "UPDATE wohnen SET wohnnung='".$db->escapeString($data['wohnnung'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteWohnen($id)
    {
        $db = new Database();

        $sql = "DELETE FROM wohnen WHERE id=".intval($id);
        $db->query($sql);
    }
}