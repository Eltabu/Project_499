<?php

class Dashboard extends Controller
{        

  public function index()
  { 
     if ($_SESSION['type'] == 2)
     {   
     

    $this->getReservations();
    
     $this->view('Dashboard/index', ['viewName' => 'Dashboard']);

     }
    else
    {
      header('location: '.URL.'Login');
    }
  }

    public function support()
  { 
     if ($_SESSION['type'] == 2)
{ 

      //get tickets info features from the database
      $ticketModel = $this->model('Ticket');
      $this->ticket = $ticketModel->getTicketsForCustomer($_SESSION['user_id']);   

     $this->view('Dashboard/Support', ['viewName' => 'Dashboard']);

     }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function account()
  { 
    if ($_SESSION['type'] == 2)
     {   
     

    $userModel = $this->model('User');
    $this->user = $userModel->getAccountInfo($_SESSION['user_id']);
    
     $this->view('Dashboard/account', ['viewName' => 'Dashboard']);

     }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function getReservations()
    {
      $reservationsModel = $this->model('Reservation');
      $this->reservations = $reservationsModel->getReservations();
    }

    public function cancelReservation($resid)
    {
      $reservationsModel = $this->model('Reservation');
      $this->reservations = $reservationsModel->cancelReservation($resid);

        header('location: '.URL.'Dashboard/Reservations');
    }

    public function updateBasic()
    {
      $userModel = $this->model('User');
      $this->user = $userModel->updateBasic($_POST);

      header('location: '.URL.'Dashboard/Account'); 
    }


  public function sendMessage()
  {
    if ($_SESSION['type'] == 2)
    { 
      //get tickets info features from the database
      $ticketModel = $this->model('Ticket');
      $ticketModel->customerSendMessage($_SESSION['user_id'], $_POST['message'], $_POST['subject']);

      header('location: '.URL.'Dashboard/Support'); 
    }
  }



}