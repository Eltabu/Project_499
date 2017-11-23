<?php

class Login extends Controller
{
    public function index()
    {
      $this->view('Login/index', ['viewName' => 'Login']);
    }
          
    public function logout()
    {
      unset($_SESSION['user_id']);
     unset($_SESSION['type']);
     unset($_SESSION['username']);
      Session::destroy();
      header('location: '.URL.'Home');
      Session::int();
    }

    public function isUser()
    {

      $userModel = $this->model('User');
      $result = $userModel->isUser($_POST['username'], $_POST['password']);  

      if($result[0]->type == 1)
      {
        Session::set('user_id', $result[0]->user_id);
        Session::set('username', $result[0]->username);
        Session::set('type', $result[0]->type); 
        header('location: '.URL.'Admin');
      }
      else if($result[0]->type == 2)
      {
        Session::set('user_id', $result[0]->user_id);
        Session::set('username', $result[0]->username);
        Session::set('type', $result[0]->type);  
        header('location: '.URL.'Home');
      }
      else
      {
        //show an error 
        header('location: '.URL.'Login');
      }
    }

}
