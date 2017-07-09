<?php

class AboutUs extends Controller
{
    public function index()
    {
      $this->view('aboutUs/index', ['viewName' => 'About Us']);
    }

}
