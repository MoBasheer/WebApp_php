<?php

/* Controller base class, core functionalities that controllers need to function properly
(invoke model classes to access data + call views)
*/
    Class Controller {
        //Invoke model, access db
        public function model($model){
            if(file_exists(APPLICATION_PATH . '/models/' . $model . '.php')){
                require_once APPLICATION_PATH . '/models/' . $model . '.php';
                return new $model();
            } else {
                return null;
            }
        }

        //Invoke view, put data
        public function view($name, $data = []){ 
            //$data will contain data in this view
            if(file_exists(APPLICATION_PATH . '/views/' . $name . '.php')){
                include APPLICATION_PATH . '/views/' . $name . '.php';
            } else {
                echo "ERROR: the view $name does not exist!";
            }
        }
    }
?>