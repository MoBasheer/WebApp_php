<?php
class BookingController extends Controller
{
    public function get()
    {
        if ($_SESSION['user_id'] == null) {
            header('location:/login');
        }
        $this->view('home/booking');
    }

    public function getAvailableClasses()
    {
        $classes = $this->model('Classes')->getAvailable();
        return $classes;
    }

    public function getUserClasses()
    {
        $userClasses = $this->model('Classes')->getUserClasses($_SESSION['user_id']);
        return $userClasses;
    }

    public function post(){
        //Parser json object from string to array
        $decoded = json_decode(file_get_contents('php://input'), true);
        $bookedClass = $this->model('Classes');
        $bookedClass->date = $decoded['date'];
        $bookedClass->time_start = $decoded['time_start'];
        $bookedClass->time_end = $decoded['time_end'];

        if ($decoded['date'] == NULL || $decoded['time_start'] == NULL || $decoded['time_end' == NULL]) {
            // Throw error
            header('HTTP/1.1 400 Bad Request', true, 401);
        }
        //Book the class
        $bookedClass->bookClass($_SESSION['user_id']);
    }
}
