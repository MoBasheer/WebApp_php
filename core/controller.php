<?php

/* Controller base class, core functionalities that controllers need to function properly
(invoke model classes to access data + call views)
*/
    Class Controller {
        //Invoke model, access db
        public function model($model){
            if(file_exists('../models/' . $model . '.php')){
                require_once '../models/' . $model . '.php';
                return new $model();
            } else {
                return null;
            }
        }

        //Invoke view, put data
        public function view($name, $data = []){ //$data will contain data in this view
            if(file_exists('./views/' . $name . '.php')){
                include './views/' . $name . '.php';
            } else {
                echo 'ERROR: the view $name does not exist!';
            }
        }
    }
?>