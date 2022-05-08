<?php

class LoginController extends controller {
    public function login(){
        //display the login form and process user input
        if(isset($_POST['action'])){
            $aUser = $this->model('User')->findUser($_POST['username']);
            //if user exists and passowrd is correct, start session and login
            if($aUser != null && password_verify($_POST['password'], $aUser->password)){
                $_SESSION['user_id'] = $aUser->user_id;
                header('location:/home/home');
            } else {
                //return error
                $this->view('login/login', 'Incorrect username/password combination!');
            }
        } else {
            $this->view('login/login');
        }
    }

    public function register(){
        //display the register form and process registration
        if(isset($_POST['action'])){
            $newUser = $this->model('User');
            $aUser = $newUser->findUser($_POST['username']);

            //check if user doesn't exist & passwords match => insert into database
            if($aUser == null && $_POST['password'] == $_POST['password_confirm']){
                $newUser->username = $_POST['username'];
                $newUser->password = password_hash($_POST['password'], PASSWORD_DEFAULT);//hash function to hash password
                $newUser->create();
                header('location:/login/login'); 
            }
            //return error
            $this->view('login/register', 'the username is in use or the passwords did not match!');
        } else {
            $this->view('login/register');
        }
    }

    public function logout(){
        //process logout requests
        session_destroy();
        header('location:/login/login');
    }
}