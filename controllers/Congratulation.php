<?php

class Congratulation extends Controller
{   
    public $url;

    public function index()
    {
      $this->url =  $_GET['variable'];     
      $this->view('Congratulation/index', ['viewName' => 'Congratulation']);
      
    }

}
