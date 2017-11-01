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


}
