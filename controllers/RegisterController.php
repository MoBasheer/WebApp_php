<?php
    class RegisterController extends Controller{
        public function get(){
            $this->view('login/register');
        }

        public function post() {
            $this->register();
        }

        public function register(){
            //display the register form and process registration
            if(isset($_POST['action'])){
                $newUser = $this->model('User');
                $aUser = $newUser->findUser($_POST['username']);

                var_dump($_POST);
                echo "<br />";
                var_dump($newUser);
                echo "<br />";
                var_dump($aUser);
                echo "<br />";
    
                //check if user doesn't exist & passwords match => insert into database
                if($aUser == null && $_POST['password'] == $_POST['password_confirm']){
                    echo 'Oh yeah';
                    $newUser->username = $_POST['username'];
                    $newUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash function to hash password
                    $newUser->createUser();
                    header('location:/login/login'); 
                }
                //return error
                $this->view('login/register', 'the username is in use or the passwords did not match!');
            } else {
                $this->view('login/register');
            }
        }
    }

?>