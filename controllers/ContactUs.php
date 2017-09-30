<?php


/**
 * COntact us class function as controller to display the contact us page
 */
class ContactUs extends Controller
{
    public function index()
    {
      $this->view('ContactUs/index', ['viewName' => 'Contact Us']);
    }

}
