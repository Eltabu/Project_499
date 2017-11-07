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
      $this->view('AdminDashboard/customers', ['viewName' => 'Dashboard - Customers']);
    }
    else
    {
      header('location: '.URL.'Login');
    }

  }

/*******************************************
/       The inquiries page methods         *
/******************************************/
  public function inquiries()
  {
    if ($_SESSION['role'] == 1)
    {   
      $this->view('AdminDashboard/inquiries', ['viewName' => 'Dashboard - Inquiries']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }
/*******************************************
/       The products page methods         *
/******************************************/
  public function products()
  {
    if ($_SESSION['role'] == 1)
    {   
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
      $this->view('AdminDashboard/financial', ['viewName' => 'Dashboard - Financial']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


/*******************************************
/       The pages page methods          *
/******************************************/
  public function pages()
  {
    if ($_SESSION['role'] == 1)
    {   
      $this->view('AdminDashboard/pages', ['viewName' => 'Dashboard - Pages']);
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

}
