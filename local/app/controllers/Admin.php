<?php

class Admin extends Controller
{

    public $locations,$vehicles, $user, $ticket;


    public function index()
    {
      if ($_SESSION['type'] == '1')
      {
        $this->view('Admin/index', ['viewName' => 'Admin Dashboard']);
      }
      else
      {
        header('location: '.URL.'Login');
      }
    }

    public function vehicles()
  {
    $this->getVehicles();
    //Loading the about us page
    $this->view('Admin/vehicles', ['viewName' => 'Admin Dashboard']);
  }

    public function account()
  { 
    $this->getVehicles();
    //Loading the about us page
    $this->view('Admin/account', ['viewName' => 'Admin Dashboard']);    
  }

     public function locations()
  {
    $this->getLocations();
    //Loading the about us page
    $this->view('Admin/locations', ['viewName' => 'Admin Dashboard']);
  }

  public function inquiries()
  {
    $ticketModel = $this->model('Ticket');
    $this->tickets = $ticketModel->getTickets();  
    include("config/inquirycontroller.php");
  }

  public function sendMessage()
  {
    $ticketModel = $this->model('Ticket');
    $ticketModel->saveReplay($_POST, date("Y-m-d H:i:s"), $_SESSION['id']);  
    //print_r($_POST);

    $this->inquiries();
  }




    public function getLocations()
    {
      $locationsModel = $this->model('Location');
      $this->locations = $locationsModel->getLocations();
    }

    public function getVehicles()
    {
      $vehiclesModel = $this->model('Vehicle');
      $this->vehicles = $vehiclesModel->getVehicles();
    }

     public function addVehicle()
  {

     $vehicleModel = $this->model('Vehicle');

          $vehicleModel->addVehicle($_POST);

          header('location: '.URL.'Admin/vehicles');
  }

   public function addAdmin()
  { 

          $userModel = $this->model('User');

          $result = $userModel->addAdmin($_POST);

          header('location: '.URL.'Admin/account');  
  }

   public function addLocation()
  {
     $locationModel = $this->model('Location');

          $locationModel->addLocation($_POST);

          header('location: '.URL.'Admin/locations');
  }


}
