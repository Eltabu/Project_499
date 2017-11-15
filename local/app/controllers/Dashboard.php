<?php

class Dashboard extends Controller
{        
  public function index()
  { 
    // if ($_SESSION['type'] == 1)
    // {   
     

    $this->getReservations();
    
     $this->view('Dashboard/index', ['viewName' => 'Dashboard']);

    // }
    // else
    // {
    //   header('location: '.URL.'Login');
    // }
  }

  public function getReservations()
    {
      $reservationsModel = $this->model('Reservation');
      $this->reservations = $reservationsModel->getReservations();
    }


}