<?php
class ManageUsersController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] == null) {
            header('location:/login');
        }
        $this->view('home/manageUsers');
    }

    public function post()
    {
        $this->getUsers();
    }

    public function delete()
    {
        $this->deleteUser();
    }

    public function getUsers()
    {
        $users = $this->model('User')->get();
        return $users;
    }

    public function deleteUser()
    {
        $aUser = $this->model('User')->findUser($_POST['username']);
        if (isset($_POST['action'])) {
            $aUser->deleteUser();
            header('location:home/manageUsers');
        } else {
            $this->view('home/manageUsers', $aUser);
        }
    }
}
