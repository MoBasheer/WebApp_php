<?php

class Classes extends Model
{

    public function get()
    {
        $SQL = "SELECT * FROM Class";
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Classes');
        return $stmt->fetchAll();
    }
}
