<?php

class Dashboard extends Controller
{        
    public function index()
    { 
      if ($_SESSION['role'] == 1)
      {   
        $this->view('Dashboard/index', ['viewName' => 'Dashboard']);
      }
      else if($_SESSION['role'] == 2)
      {

      }
      else
      {
        header('location: '.URL.'login');
      }
    }

}
