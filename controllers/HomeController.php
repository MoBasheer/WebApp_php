<?php
    require_once 'core/controller.php';

    class HomeController extends Controller {
        public function get() {
            echo 'Home get method';
        }
        public function post() {
            echo 'shit bro';
        }
        // public function index(){
        //     echo 'In home controller';

            
        //     // $this->view('../views/Home/home');
        // }
    }

?>