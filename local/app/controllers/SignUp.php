<?php

class SignUp extends Controller
{
    public function index()
    {
      $this->view('SignUp/index', ['viewName' => 'SignUp']);
    }
}
