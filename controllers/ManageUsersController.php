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

    public function getUsers()
    {
        $users = $this->model('User')->get();
        return $users;
    }
    
    public function delete($params)
    {
        // If current user isn't admin reject
        if ($_SESSION['role'] != 'admin') {
            header('HTTP/1.0 403 Forbidden');
        }
        // There's only one admin and deleting him is forbidden
        $aUser = $this->model('User')->findUser($params['username']);
        if ($aUser->role == 'admin') {
            header('HTTP/1.0 403 Forbidden');
            return;
        }
        // Otherwise it's a normal user delete him
        $this->model('User')->deleteUser($params['username']);;
    }
}
