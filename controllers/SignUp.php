<?php

/**
 * ProductInfo class display information about the rental system
**/
class SignUp extends Controller
{
    public function index()
    {
      $this->view('SignUp/index', ['viewName' => 'SignUp']);
    }
}
