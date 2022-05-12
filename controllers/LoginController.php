<?php

class LoginController extends Controller
{
    public function get()
    {
        $this->view('login/login');
    }

    public function post()
    {
        $this->login();
    }

    public function delete()
    {
        $this->logout();
    }

    public function login()
    {
        //display the login form and process user input
        if (isset($_POST['action'])) {
            $aUser = $this->model('User')->findUser($_POST['username']);
            //if user exists and passowrd is correct, start session and login
            if ($aUser != null && password_verify($_POST['password'], $aUser->password)) {
                $_SESSION['user_id'] = $aUser->user_id;
                $_SESSION['role'] = $aUser->role;
                $_SESSION['username'] = $aUser->username;
                header('location:/home');
            } else {
                //return error
                $this->view('login/login', 'Incorrect username/password combination!');
            }
        } else {
            $this->view('login/login');
        }
    }

    public function logout()
    {
        //process logout requests
        session_destroy();
    }
}
