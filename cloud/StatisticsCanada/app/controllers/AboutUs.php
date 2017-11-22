<?php

/**
 * About us class function as controller to display the about us page
 */
 
class AboutUs extends Controller
{
    public function index()
    {
      $this->view('AboutUs/index', ['viewName' => 'About Us']);
    }

}
