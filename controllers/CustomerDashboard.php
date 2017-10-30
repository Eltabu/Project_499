<?php

class CustomerDashboard extends Controller
{        
    public function index()
    { 
      if ($_SESSION['role'] == 2)
      {   
        $this->view('CustomerDashboard/index', ['viewName' => 'Dashboard']);
      }
      else
      {
        header('location: '.URL.'Login');
      }
    }

}
