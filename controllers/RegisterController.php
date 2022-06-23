<?php
class RegisterController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] !== null) {
            header('location:/home');
        }
        $this->view('login/register');
    }

    public function post()
    {
        //Validate csrf token
        $token = filter_input(INPUT_POST, 'csrf_token', FILTER_DEFAULT);
        if ($token === $_SESSION['csrf_token']) {
            //display the register form and process registration
            if (isset($_POST['action'])) {
                $newUser = $this->model('User');
                $aUser = $newUser->findUser($_POST['username']);
                //check if user doesn't exist & passwords match => insert into database
                if ($aUser == null && $_POST['password'] == $_POST['password_confirm']) {
                    $newUser->username = $_POST['username'];
                    // hash function to hash password using CRYPT_BLOWFISH algorithm
                    $newUser->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $newUser->createUser();
                    $msg['succes'] = 'You have registered successfully, please go to the login page to log in!';
                    $this->view('login/register', $msg);
                } else {
                    //return error
                    $msg['error'] = 'De gebruikersnaam is in gebruik of de wachtwoorden komen niet overeen!';
                    $this->view('login/register', $msg);
                }
            } else {
                $this->view('login/register');
            }
        } else {
            header('HTTP/1.1 403 Forbidden', true, 403);
            return;
        }
    }
}
