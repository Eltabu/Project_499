<?php

class AdminDashboard extends Controller
{        
    public function index()
    { 
      if ($_SESSION['role'] == 1)
      {   
        $this->view('AdminDashboard/index', ['viewName' => 'Dashboard']);
      }
      else
      {
        header('location: '.URL.'Login');
      }
    }

}
