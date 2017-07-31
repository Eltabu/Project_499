<?php

class Home extends Controller
{        
    public function index()
    {     
      $this->view('Home/index', ['viewName' => 'Home']);
    }


    /*public function test($name = '', $age = '')
    { 
      echo $age;  
      //$user = $this->model('User');   
      //$this->view('home/index', ['viewName' => 'Home']);
    }*/
}
