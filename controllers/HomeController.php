<?php
    require_once 'core/controller.php';

    class HomeController extends Controller {
        public function get() { 
            if ($_SESSION['user_id'] == null) {
                header('location:/login');
            } else {
                $this->view('home/home');
            }
        }
        
    }

?>