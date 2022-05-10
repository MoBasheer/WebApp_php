<?php
    //Extend model class that perform all the connection to the database
    class User extends Model {
        var $user_id;
        var $username;
        var $password;
        var $role;

        function __construct(){
            parent::__construct();
        }

        //Find user bij ID
        public function find($user_id){
            $SQL = 'SELECT * FROM Users WHERE user_id = :user_id';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['user_id'=>$user_id]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Users');
            return $stmt->fetch();
        }

        //Find user bij username
        public function findUser($username){
            $SQL = 'SELECT * FROM Users WHERE username = :username';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['username'=>$username]);
            // Instance to be populated by database fetch operation
            $result = new User();
            $stmt->setFetchMode(PDO::FETCH_INTO, $result);
            $stmt->fetch();
            return $result;
        }

        //Create user when register
        public function createUser(){
            $SQL = 'INSERT INTO Users(username, password) VALUES(:username, :password)';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['username'=>$this->username, 'password'=>$this->password]);
            return $stmt->rowCount();
        }
    }
?>