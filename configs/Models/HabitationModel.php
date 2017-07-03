<?php

class HabitationModel
{
    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM habitation WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getAllHabitations()
    {
        $db = new Database();

        $sql = "SELECT hab.id, hab.userId, hab.topic, user.name FROM habitation as hab INNER JOIN USER ON user.id = hab.userId";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $habitationArray = array();

            while($row = $db->fetchObject($result))
            {
                $habitationArray[] = $row;
            }

            return $habitationArray;
        }

        return null;
    }

    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO habitation(userId,topic) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE habitation SET topic='".$db->escapeString($data['topic'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM habitation WHERE id=".intval($id);
        $db->query($sql);
    }
}