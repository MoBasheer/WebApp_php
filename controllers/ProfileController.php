<?php
class ProfileController extends Controller
{
    public function get()
    {
        $this->view('login/profile');
    }

    // public function post(){
    //     // $this->profile();
    // }

    // public function profile($user_id){
    //     // $aUser = $this->model('User')->findUser($user_id);
    // }
}
