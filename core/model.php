<?php
    //Model base class to connect to the database
    class Model{
        //One connection for all model objects
        protected static $_connection = null;

        public function _construct(){
            //Initialize connection
            if(self::$_connection == null){
                //Define parameters
                $host = 'localhost';
                $dbname = 'WebApp';
                $user = 'root';
                $password = '';

                //Use PDO to connect to the database
                self::$_connection = new PDO("mysql: host=$host; dbname=$dbname", $user, $password);
            }
        }
    }
?>