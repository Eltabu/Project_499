<?php

class Admin extends Controller
{

    public $locations,$vehicles, $user, $ticket;


    public function index()
    {
      if ($_SESSION['type'] == '1')
      {
        $this->getUsers();
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

  public function pages()
    {
      if ($_SESSION['type'] == '1')
      {
        $this->view('Admin/pages', ['viewName' => 'Admin Dashboard']);
      }
      else
      {
        header('location: '.URL.'Login');
      }
    }


      public function deleteVehicle($vehid)
    {
      $vehiclesModel = $this->model('Vehicle');
      $this->vehicles = $vehiclesModel->deleteVehicle($vehid);

        header('location: '.URL.'Admin/vehicles');
    }

    public function account()
  { 
    $this->getVehicles();
    //Loading the about us page
    $this->view('Admin/account', ['viewName' => 'Admin Dashboard']);    
  }

   public function updatePassword()
    {
      $userModel = $this->model('User');
      $this->user = $userModel->updatePassword($_POST);

      header('location: '.URL.'Admin/Account'); 
    }

     public function locations()
  {
    $this->getLocations();
    //Loading the about us page
    $this->view('Admin/locations', ['viewName' => 'Admin Dashboard']);
  }

   public function deleteLocation($locid)
    {
      $locationsModel = $this->model('Location');
      $this->locations = $locationsModel->deleteLocation($locid);

        header('location: '.URL.'Admin/locations');
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

      public function getUsers()
    {
      $usersModel = $this->model('User');
      $this->users = $usersModel->getUsers();
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

  public function updateStrings()
  {

    $addressString = "'".$_POST['address']."'";
    $aboutUs = "'".$_POST['aboutUs']."'";
    $phone = "'".$_POST['phone']."'";
    $email = "'".$_POST['email']."'";

    $facebook = "'".$_POST['Facebook']."'";
    $linkedin = "'".$_POST['LinkedIn']."'";
    $twitter = "'".$_POST['Twitter']."'";
    $instagram = "'".$_POST['Instagram']."'";
    
    $fp = fopen(__DIR__.'/../config/strings.php', 'w+');

     fwrite($fp, "<?php

      ");
    fwrite($fp, "define('ADDRESS', $addressString);");
     fwrite($fp, "define('ABOUTUS', $aboutUs);");
     fwrite($fp, "define('PHONE', $phone);");
      fwrite($fp, "define('EMAIL', $email);");
     fwrite($fp, "define('FACEBOOK', $facebook);");
     fwrite($fp, "define('TWITTER', $twitter);");
     fwrite($fp, "define('LINKEDIN', $linkedin);");
     fwrite($fp, "define('INSTAGRAM', $instagram);");
      fclose($fp);
  }


}
