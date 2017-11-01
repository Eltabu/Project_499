<?php

class Login extends Controller
{
    public function index()
    {
      $this->view('Login/index', ['viewName' => 'Login']);
    }
          
    public function logout()
    {
      unset($_SESSION['username']);
      Session::set($_SESSION['role']); 
      Session::destroy();
      header('location: '.URL.'Home');
      Session::int();
    }

    public function isUser()
    {
      $userModel = $this->model('User');
      $result = $userModel->isUser($_POST['username'], md5($_POST['password']));  
      if($result['role'] == 1)
      {
        //go to dashboard if the user is admin
        Session::set('username', $result['username']);
        Session::set('role', $result['role']); 
        header('location: '.URL.'Dashboard');
      }
      else if($result['role'] == 2)
      {
        //go to dashboard if the user is admin
        Session::set('username', $result['username']);
        Session::set('role', $result['role']);  
      }
      else
      {
        //show an error 
        header('location: '.URL.'Login');
      }
    }

}
