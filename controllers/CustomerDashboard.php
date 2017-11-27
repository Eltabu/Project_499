<?php

class CustomerDashboard extends Controller
{        
  public function index()
  { 
    if ($_SESSION['role'] == 2)
    { 
      //get customers info from the database
      $CustomerDashboardModel = $this->model('CustomerDashboardModel');
      $this->info = $CustomerDashboardModel->getCustomerDashboardInfo($_SESSION['id']);    
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
      //get product features
      $ProductModel = $this->model('ProductModel');
      $this->product_info = $ProductModel->getProductInfo($_SESSION['id']); 

      $this->product_feature = $ProductModel->getProductFeatureCustomer($_SESSION['id']); 
      
        
      $this->view('CustomerDashboard/myProduct', ['viewName' => 'Dashboard - My Product']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }


  /*******************************************
  /   The My Available Features page methods *
  /******************************************/
  public function availableFeatures()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get Available Features from the database
      $FeatureModel = $this->model('FeatureModel');
      $this->info = $FeatureModel->getCustomerDashboardFeatures();  
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
      //get features for upgrade
      $FeatureModel = $this->model('FeatureModel');
      $this->featureUpgrade = $FeatureModel->customerDashbardGetFeatureUpgrade($_SESSION['id']);
      //get feature for reomve
      $this->featureRemove = $FeatureModel->customerDashbardGetFeatureRemove($_SESSION['id']);  
      $this->view('CustomerDashboard/upgrade', ['viewName' => 'Dashboard - Upgrade']);
    }
    else
    {
      header('location: '.URL.'Login');
    }
  }

  public function upgradToFeature()
  {
    if ($_SESSION['role'] == 2)
    {   
      print_r($_GET);



      //$this->upgrade();
    }
  }

  public function removeFeature()
  {
    if ($_SESSION['role'] == 2)
    {   
      print_r($_GET);



      //$this->upgrade();
    }
  }





  /*******************************************
  /       The My Payment History  page methods         *
  /******************************************/
  public function paymentHistory()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get payment history from the database
      $TransactionModel = $this->model('TransactionModel');
      $this->payments = $TransactionModel->customerGetPayments($_SESSION['id']);  
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

  public function updateCreditCard()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get tickets info features from the database
      $CustomerDashboardModel = $this->model('CustomerDashboardModel');
      //$CustomerDashboardModel->updateCustomerCreditCard($_SESSION['id'], $_POST);

      

      //$this->settings();
    }
  }

  public function updateCredentials()
  {
    if ($_SESSION['role'] == 2)
    { 
      //get tickets info features from the database
      $CustomerDashboardModel = $this->model('CustomerDashboardModel');
      $CustomerDashboardModel->updateCusotmerCredential($_SESSION['id'], $_POST);


      //$this->settings();
    }
  }

  public function updateCustomerInfo()
  {
    if ($_SESSION['role'] == 2)
    { 
      
      //get tickets info features from the database
      $CustomerDashboardModel = $this->model('CustomerDashboardModel');
      //$CustomerDashboardModel->updateCustomerInfo($_SESSION['id'], $_POST);

      print_r($_POST);

      //$this->settings();
    }
  }

}
