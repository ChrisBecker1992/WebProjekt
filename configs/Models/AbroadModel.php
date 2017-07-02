<?php

class AbroadModel
{
    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM abroad WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getAllAbroads()
    {
        $db = new Database();

        $sql = "SELECT * FROM abroad INNER JOIN USER ON user.id = abroad.userId";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $abroadArray = array();

            while($row = $db->fetchObject($result))
            {
                $abroadArray[] = $row;
            }

            return $abroadArray;
        }

        return null;
    }

    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO abroad(userId,topic) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE abroad SET topic='".$db->escapeString($data['topic'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM abroad WHERE id=".intval($id);
        $db->query($sql);
    }
}