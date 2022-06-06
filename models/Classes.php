<?php

class Classes extends Model
{
    var $date;
    var $time_start;
    var $time_end;
    var $booked_by;

    function __construct()
    {
        parent::__construct();
    }

    //Retrieve all classes from the db with the username of the user who booked the class
    public function getClasses()
    {
        $SQL = 'SELECT * FROM Class LEFT OUTER JOIN Users ON Class.booked_by = Users.user_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Classes');
        return $stmt->fetchAll();
    }

    //Retrieve only the available classes from the db
    public function getAvailable()
    {
        $SQL = "SELECT * FROM Class WHERE booked_by IS NULL";
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Classes');
        return $stmt->fetchAll();
    }

    //Retrieve classes per user
    public function getUserClasses($user_id)
    {
        $SQL = 'SELECT * FROM Class LEFT OUTER JOIN Users ON Class.booked_by = Users.user_id WHERE Class.booked_by = :user_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(array('user_id' => $user_id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Classes');
        return $stmt->fetchAll();
    }

    //Find a class in the db 
    public function findClass($date, $time_start, $time_end)
    {
        $SQL = 'SELECT * FROM Class WHERE date = :date AND time_start = :time_start AND time_end = :time_end';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(array('date' => $date, 'time_start' => $time_start, 'time_end' => $time_end));
        // Instance to be populated by database fetch operation
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Classes');
        return $stmt->fetch();
    }

    //Insert new dates to the db
    public function createClass()
    {
        $SQL = 'INSERT INTO Class (date, time_start, time_end) VALUES(:date, :time_start, :time_end)';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['date' => $this->date, 'time_start' => $this->time_start, 'time_end' => $this->time_end]);
        return $stmt->rowCount();
    }

    //Update the class table when user book a date
    public function bookClass($user_id)
    {
        $SQL = 'UPDATE Class SET booked_by = :user_id WHERE date = :date AND time_start = :time_start AND time_end = :time_end';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['date' => $this->date, 'time_start' => $this->time_start, 'time_end' => $this->time_end, 'user_id' => $user_id]);
        $this->booked_by = $user_id;
        return $stmt->rowCount();
    }
}
