<?php

class VeranstaltungModel
{
    public static function getVeranstaltungById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM veranstaltung WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getBeitragById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM veranstaltung WHERE id=".intval($id);

        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getVeranstaltungByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM veranstaltung WHERE userId=".intval($userId);
        $result = $db->query($sql);

        if($db->numRows($result) > 0)
        {
            $veranstaltungArray = array();

            while($row = $db->fetchObject($result))
            {
                $veranstaltungArray[] = $row;
            }

            return $veranstaltungArray;
        }

        return null;
    }

    public static function createNewBeitrag($data)
    {
        $db = new Database();

        $beitrag = $db->escapeString($data['beitrag']);
        $sql = "INSERT INTO veranstaltung(userId,veranstaltungen) VALUES('".$db->escapeString($data['userId'])."','".$beitrag."')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object) $data;
    }

    public static function saveVeranstaltung($data)
    {
        $db = new Database();

        $sql = "UPDATE veranstaltung SET veranstaltungen='".$db->escapeString($data['veranstaltungen'])."' WHERE id=".intval($data['id']);
        $db->query($sql);

        return (object) $data;
    }

    public static function deleteBeitrag($id)
    {
        $db = new Database();

        $sql = "DELETE FROM veranstaltung WHERE id=".intval($id);
        $db->query($sql);
    }
}