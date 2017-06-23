<?php

class AuslandModel
{
    public static function getAddressById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM ausland WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getAuslandByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM ausland WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $auslandArray = array();

            while($row = $db->fetchObject($result))
            {
                $auslandArray[] = $row;
            }

            return $auslandArray;
        }

        return null;
    }

    public static function createNewAusland($data)
    {
        $db = new Database();

        $sql = "INSERT INTO ausland(userId,topic) VALUES('".$db->escapeString($data['userId'])."','".$db->escapeString($data['topic']);
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveAusland($data)
    {
        $db = new Database();

        $sql = "UPDATE ausland SET topic='".$db->escapeString($data['topic'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteAusland($id)
    {
        $db = new Database();

        $sql = "DELETE FROM ausland WHERE id=".intval($id);
        $db->query($sql);
    }
}