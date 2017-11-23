<?php

class AdminDashboard extends Controller
{
  
  // public properties
  public $latestCompanies;
  public $totalCustomers;
  public $totalInquiries;


  public function index()
  { 

    $this->getlatestCompanies();
    $this->getTotalCustomers();
    $this->getTotalInquiries(); 

    if ($_SESSION['role'] == 1)
    {   
      $this->view('AdminDashboard/index', ['viewName' => 'Dashboard']);
    }
    else
    {
      header('location: '.URL.'Login');
    }

   
  }


/*******************************************
/         The index page methods           *
/******************************************/

  /**
  * retrieves the contries form the model
  **/
  public function getlatestCompanies()
  {
    $AdminDashboardModel = $this->model('AdminDashboardModel');
    $this->latestCompanies = $AdminDashboardModel->getLatestCompanies();
  }

  /**
  * retrieves the total customers form the model
  **/
  public function getTotalCustomers()
  {
    $AdminDashboardModel = $this->model('AdminDashboardModel');
    $this->totalCustomers = $AdminDashboardModel->getTotalCustomers();
  }

  /**
  * retrieves the total inquiries form the model
  **/
  public function getTotalInquiries()
  {
    $AdminDashboardModel = $this->model('AdminDashboardModel');
    $this->totalInquiries = $AdminDashboardModel->getTotalInquiries();
  }

/*******************************************
/       The customers page methods         *
/******************************************/

  public function customers()
  {
    if ($_SESSION['role'] == 1)
    { 
      //get customers info from the database
      $Customer = $this->model('Customer');
      $this->customers = $Customer->adminGetCustomers();      
      $this->view('AdminDashboard/customers', ['viewName' => 'Dashboard - Customers']);
    }
    else
    {
      header('location: '.URL.'Login');
    }

  }


  public function disablecustoemr()
  {
    if ($_SESSION['role'] == 1)
    { 
      //remove the .htaccess from the customer file

      $myfile = fopen('./'.$_GET['WebsiteURL'].'/.htaccess', "w");
      fwrite($myfile, "");
      fclose($myfile);

      //print_r($_GET);

      //get disable customers in the database
      $Customer = $this->model('Customer');
      $Customer->adminUpdateCustomerStatus($_GET['customer_id'], 0);


      $this->customers();
    }
  }


  public function enablecustoemr()
  {
    if ($_SESSION['role'] == 1)
    { 
      //remove the .htaccess from the customer file

      $myfile = fopen('./'.$_GET['WebsiteURL'].'/.htaccess', "w");
      fwrite($myfile, HTACCESS_BEGINNING."\n");
      fwrite($myfile, 'RewriteBase /moad/project/'.$_GET['WebsiteURL'].'/'."\n");//Don't forget ot change
      fwrite($myfile, HTACCESS_END);
      fclose($myfile);

      //get enable customer the database
      $Customer = $this->model('Customer');
      $Customer->adminUpdateCustomerStatus($_GET['customer_id'], 1);
           
      $this->customers();
    }
  }

/*******************************************
/       The inquiries page methods         *
/******************************************/
  public function inquiries()
  {
    if ($_SESSION['role'] == 1)
    { 
      //get tickets info features from the database
      $TicketModel = $this->model('TicketModel');
      $this->tickets = $TicketModel->getTickets();  
      $this->view('AdminDashboard/inquiries', ['viewName' => 'Dashboard - Inquiries']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function sendMessage()
  {
    $TicketModel = $this->model('TicketModel');
    $TicketModel->saveReplay($_POST, date("Y-m-d H:i:s"), $_SESSION['id']);  
    //print_r($_POST);

    $this->inquiries();
  }

  
/*******************************************
/       The products page methods         *
/******************************************/
  public function products()
  {
    if ($_SESSION['role'] == 1)
    { 
      //get tickets info features from the database
      $ProductModel = $this->model('ProductModel');
      $this->products = $ProductModel->adminGetProducts();    
      $this->view('AdminDashboard/products', ['viewName' => 'Dashboard - Products']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

/*******************************************
/       The features page methods          *
/******************************************/
  public function features()
  {
    if ($_SESSION['role'] == 1)
    { 
      //get features info from the database
      $FeatureModel = $this->model('FeatureModel');
      $this->featureList = $FeatureModel->getAdminFeatures();   
      $this->view('AdminDashboard/features', ['viewName' => 'Dashboard - Features']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

/*******************************************
/       The financial page methods          *
/******************************************/
  public function financial()
  {
    if ($_SESSION['role'] == 1)
    { 
      //get tickets info features from the database
      $ProductModel = $this->model('ProductModel');
      $this->products = $ProductModel->adminGetProducts();    
      $this->view('AdminDashboard/financial', ['viewName' => 'Dashboard - Financial']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


/*******************************************
/       The management page methods          *
/******************************************/
  public function management()
  {
    if ($_SESSION['role'] == 1)
    {   
      $this->view('AdminDashboard/management', ['viewName' => 'Dashboard - Management']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function addFleetSize()
  {
    if ($_SESSION['role'] == 1)
    { 
      //save the info to the database
      $FleetSizeModel = $this->model('FleetSizeModel');
      $FleetSizeModel->addFleetSize($_POST['fleetname'], $_POST['fleetSize'], $_SESSION['id']);   


      $this->management();
    }
  }

  public function addCompanyName()
  {
    if ($_SESSION['role'] == 1)
    { 
      //save the info to the database
      $CountryCollection = $this->model('CountryCollection');
      $CountryCollection->addCountryName($_POST['countryName'], $_SESSION['id']);   


      $this->management();
    }
  }



/*******************************************
/       The settings page methods          *
/******************************************/
  public function settings()
  {
    if ($_SESSION['role'] == 1)
    {   
      $this->view('AdminDashboard/settings', ['viewName' => 'Dashboard - Settings']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function updateAdminCredential()
  {
    if ($_SESSION['role'] == 1)
    { 
      //save the info to the database
      $UserModel = $this->model('User');
      $UserModel->updateUser($_POST['username'], md5($_POST['password']) , $_SESSION['id']);   


      header('location: '.URL.'Login/logout');
    }
  }

  public function createAdmin()
  {
    if ($_SESSION['role'] == 1)
    { 
      //save the info to the database
      $UserModel = $this->model('User');
      $UserModel->addUser($_POST['firstname'], $_POST['lastname'], $_POST['username'], md5($_POST['password']), $_SESSION['id']);   


      $this->settings();
    }
  }

}
