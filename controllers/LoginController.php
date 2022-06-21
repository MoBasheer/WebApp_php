<?php

class LoginController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] !== null) {
            header('location:/home');
        }
        $this->view('login/login');
    }

    public function post()
    {
        //Validate csrf token
        $token = filter_input(INPUT_POST, 'csrf_token', FILTER_DEFAULT);
        if ($token === $_SESSION['csrf_token']) {
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
                    $msg['error'] = 'De gebruikersnaam is in gebruik of de wachtwoorden komen niet overeen!';
                    $this->view('login/login', $msg);
                }
            } else {
                $this->view('login/login');
            }
        } else {
            header('HTTP/1.1 403 Forbidden', true, 403);
            return;
        }
    }

    //process logout requests
    public function delete()
    {
        session_destroy();
    }
}
