<?php

class Dashboard extends Controller
{        
    public function index()
    { 
      if (isset($_SESSION['username'])) 
      {   
        $this->view('dashboard/index', ['viewName' => 'Dashboard']);
      }
      else
      {
        header('location: /moad/project/login');
      }
    }

}
