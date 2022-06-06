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

    public function post()
    {
        if (isset($_POST['action'])) {
            //Parse string to date and time
            $time_start = strtotime($_POST['time_start']);
            $time_end = strtotime($_POST['time_end']);

            $newClass = $this->model('Classes');
            $aClass = $newClass->findClass($_POST['date'], $_POST['time_start'], $_POST['time_end']);

            if ($aClass != NULL) {
                $msg['error'] = 'De lesdatum, begintijd en eindtijd bestaan al, probeer een unieke tijd op een specifieke datum!';
                $this->view('home/manageBooking', $msg);
            }
            //Check that the start time is not after the end time or equal to the end time! => then INSERT into db
            else if ($aClass == NULL && $time_start !== $time_end && $time_start < $time_end) {
                $newClass->date = $_POST['date'];
                $newClass->time_start = $_POST['time_start'];
                $newClass->time_end = $_POST['time_end'];
                $newClass->createClass();
                $msg['succes'] = 'U heeft uw beschikbaarheid met succes toegevoegd, zie hieronder een overzicht van alle lessen!';
                $this->view('home/manageBooking', $msg);
            } else {
                //return error
                $msg['error'] = 'De starttijd kan niet na de eindtijd liggen of gelijk zijn aan de eindtijd!';
                $this->view('home/manageBooking', $msg);
            }
        } else {
            $this->view('home/manageBooking');
        }
    }

    public function getClasses()
    {
        $classes = $this->model('Classes')->getClasses();
        return $classes;
    }
}
