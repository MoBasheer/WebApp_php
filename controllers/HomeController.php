<?php
    require_once 'core/controller.php';

    class HomeController extends Controller {
        public function get() { 
            if (isset($_SESSION[0])) {
                $this->view('home/home');
            } else {
                $this->view('login/login');
            }
        }
        
        public function post() {
            echo 'shit bro';
        }
    }

?>