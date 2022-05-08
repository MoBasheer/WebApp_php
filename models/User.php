<?php
    //Extend model class that perform all the connection to the database
    class User extends Model{
        var $username;
        var $password;

        //Find user bij ID
        public function find($user_id){
            $SQL = 'SELECT * FROM User WHERE user_id = :user_id';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['user_id'=>$user_id]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            return $stmt->fetch();
        }

        //Find user bij username
        public function findUser($username){
            $SQL = 'SELECT * FROM User WHERE username = :username';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['username'=>$username]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            return $stmt->fetch();
        }

        //Create user when register
        public function createUser(){
            $SQL = 'INSERT INTO User(username, password) VALUES(:username, :password)';
            $stmt = self::$_connection->prepare($SQL);
            $stmt->execute(['username'=>$this->username, 'password'=>$this->password]);
            return $stmt->rowCount();
        }
    }
?>