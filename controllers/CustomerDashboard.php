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

  /*******************************************
  /       The My Product page methods         *
  /******************************************/
  public function myProduct()
  {
    if ($_SESSION['role'] == 2)
    {   
      $this->view('CustomerDashboard/myProduct', ['viewName' => 'Dashboard - My Product']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


  /*******************************************
  /       The My Available Features page methods         *
  /******************************************/
  public function availableFeatures()
  {
    if ($_SESSION['role'] == 2)
    {   
      $this->view('CustomerDashboard/availableFeatures', ['viewName' => 'Dashboard - Available Features']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


  /*******************************************
  /       The My Upgrade page methods         *
  /******************************************/
  public function upgrade()
  {
    if ($_SESSION['role'] == 2)
    {   
      $this->view('CustomerDashboard/upgrade', ['viewName' => 'Dashboard - Upgrade']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


  /*******************************************
  /       The My Payment History  page methods         *
  /******************************************/
  public function paymentHistory()
  {
    if ($_SESSION['role'] == 2)
    {   
      $this->view('CustomerDashboard/paymentHistory', ['viewName' => 'Dashboard - Payment History ']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  /*******************************************
  /       The My Support page methods         *
  /******************************************/
  public function support()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get tickets info features from the database
      $TicketModel = $this->model('TicketModel');
      $this->tickets = $TicketModel->getTicketsForCustomer($_SESSION['id']);   
      $this->view('CustomerDashboard/support', ['viewName' => 'Dashboard - Support']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


  public function sendMessage()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get tickets info features from the database
      $TicketModel = $this->model('TicketModel');
      $TicketModel->customerSendMessage($_SESSION['id'], $_POST['message'], $_POST['subject']);



      $this->view('CustomerDashboard/support', ['viewName' => 'Dashboard - Support']);
    }
  }





    /*******************************************
  /       The My Settings page methods         *
  /******************************************/
  public function settings()
  {
    if ($_SESSION['role'] == 2)
    {   
      $this->view('CustomerDashboard/settings', ['viewName' => 'Dashboard - Settings']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }
}
