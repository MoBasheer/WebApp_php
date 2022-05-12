<?php
class ManageUsersController extends Controller
{
    public function get()
    {
        $this->view('home/manageUsers');
    }

    public function post()
    {
        $this->getUsers();
    }

    public function getUsers()
    {
        $users = $this->model('User')->get();
        return $users;
    }
}
