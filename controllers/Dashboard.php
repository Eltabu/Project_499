<?php

class Dashboard extends Controller
{        
    public function index()
    { 
      if (isset($_SESSION['username'])) 
      {   
        $this->view('Dashboard/index', ['viewName' => 'Dashboard']);
      }
      else
      {
        header('location: '.URL.'login');
      }
    }

}
