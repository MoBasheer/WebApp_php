<?php
class HomeController extends Controller
{
    public function get()
    {
        //Check for session. No session, redirect to login
        if ($_SESSION['user_id'] == null) {
            header('location:/login');
        } else {
            //redirect to home page
            $username = $_SESSION['username'];
            $this->view('home/home', $username);
        }
    }
}
