<?php

class PasswordChangeController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] == null) {
            header('location:/login');
        }
        $this->view('login/passwordChange');
    }

    public function post()
    {
        //Validate csrf token
        $token = filter_input(INPUT_POST, 'csrf_token', FILTER_DEFAULT);
        if ($token === $_SESSION['csrf_token']) {
            if ($_SESSION['username'] == null) {
                header('HTTP/1.0 403 Forbidden');
            }
            $oldPass = $_POST['old_password'];
            $newPass = $_POST['new_password'];
            $newPassCon = $_POST['new_password_confirm'];
            //find user in db by username
            $aUser = $this->model('User')->findUser($_SESSION['username']);
            $msg = array();
            //check if old pass is correct and new passwords match
            if (isset($_POST['action'])) {
                if (password_verify($oldPass, $aUser->password) && $newPass == $newPassCon) {
                    var_dump(password_verify($oldPass, $aUser->password));
                    $aUser->password = password_hash($newPass, PASSWORD_BCRYPT);
                    $aUser->updatePassword();
                    $msg['succes'] = 'The password has been successfully changed!';
                    $this->view('login/passwordChange', $msg);
                } else {
                    $msg['error'] = 'Het huidige wachtwoord is niet correct of de nieuwe wachtwoorden komen niet overeen!';
                    $this->view('login/passwordChange', $msg);
                }
            } else {
                $this->view('login/passwordChange');
            }
        } else {
            header('HTTP/1.1 403 Forbidden', true, 403);
        }
    }
}
