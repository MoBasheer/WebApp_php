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
        $this->changePassword();
    }

    public function changePassword()
    {
        $curPass = $_POST['password'];
        $newPass = $_POST['new_password'];
        $newPassCon = $_POST['new_password_confirm'];
        //find user in db by username
        $aUser = $this->model('User')->findUser($_POST['username']);
        //check if old pass is correct and new passwords match
        if ($curPass == $_POST['password'] && $newPass == $newPassCon) {
            if (isset($_POST['action'])) {
                $aUser->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $aUser->updatePassword();
                header('location:/login/profile');
            } else {
                $this->view('login/passwordChange', 'Het huidige wachtwoord is niet correct of de nieuwe wachtwoorden komen niet overeen!');
            }
        }
    }
}
