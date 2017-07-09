<?php

class Login extends Controller
{
    public function index()
    {
      $this->view('login/index', ['viewName' => 'Login']);
    }

    public function isUser()
    {
      $user_model = $this->model('User'); 
      $user_model->isUser();
    }

}
