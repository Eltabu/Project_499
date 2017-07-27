<?php

class Login extends Controller
{
    public function index()
    {
      $this->view('login/index', ['viewName' => 'Login', 'username' => '']);
    }
          
    public function logout()
    {
      unset($_SESSION['username']);
      Session::destroy();
      header('location: '.URL.'home');
      Session::int();
    }

    public function isUser()
    {
      $user_model = $this->model('User');
      $result = $user_model->isUser($_POST['username'], md5($_POST['password']));  
      if($result['role'] != 0)
      {
        //go to dashboard if admin else go to user account settings
        Session::set('username', $result['username']); 
        header('location: '.URL.'dashboard');
      }
      else
      {
        //show an error 
        header('location: '.URL.'login');
      }
    }

}
