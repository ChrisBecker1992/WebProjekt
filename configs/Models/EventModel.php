<?php

class EventModel
{
    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM event WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getEventByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM event INNER JOIN USER ON user.id = event.userId";
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $eventArray = array();

            while($row = $db->fetchObject($result))
            {
                $eventArray[] = $row;
            }

            return $eventArray;
        }

        return null;
    }

    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO event(userId,topic) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    //update Database
    public static function updateBeitrag($data)
    {
        $db = new Database();

        $sql = "UPDATE event SET topic='".$db->escapeString($data['topic'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    //delete from Database
    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM event WHERE id=".intval($id);
        $db->query($sql);
    }
}