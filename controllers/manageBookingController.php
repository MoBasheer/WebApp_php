<?php
class manageBookingController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] == null) {
            header('location:/login');
        }
        $this->view('home/manageBooking');
    }

    public function post(){
        $this->getClasses();
    }

    public function getClasses(){
        $classes = $this->model('Classes')->get();
        return $classes;
    }
}
