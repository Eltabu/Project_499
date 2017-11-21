<?php

class SignUp extends Controller
{
    public function index()
    {
      $this->view('SignUp/index', ['viewName' => 'SignUp']);
    }

    public function register()
    {

      $userModel = $this->model('User');
      $result = $userModel->register($_POST); 

       //go to dashboard if the user is admin
        header('location: '.URL.'Login'); 

    }
}
