<?php

class HelpModel
{

    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM help WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getHelpByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM help INNER JOIN USER ON user.id = help.userId";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $helpArray = array();

            while($row = $db->fetchObject($result))
            {
                $helpArray[] = $row;
            }

            return $helpArray;
        }

        return null;
    }

    //create new Contribution to the Database
    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO help(userId,topic) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE help SET topic='".$db->escapeString($data['topic'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM help WHERE id=".intval($id);
        $db->query($sql);
    }
}