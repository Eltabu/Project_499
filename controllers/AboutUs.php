<?php

class AboutUs extends Controller
{
    public function index()
    {
      $this->view('AboutUs/index', ['viewName' => 'About Us']);
    }

}
