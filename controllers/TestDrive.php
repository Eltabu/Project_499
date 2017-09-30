<?php

/**
 * TestDrive class display registration form for free version of the system
**/
class TestDrive extends Controller
{
    public function index()
    {
      $this->view('TestDrive/index', ['viewName' => 'Test Drive']);
    }



    /**
    * register new customer with free 30 days verstion os the system
    **/
    public function register()
    {

      $customerModel = $this->model('Customer');

       $_POST['WebsiteName'] = 'cloud/'.preg_replace('/\s+/', '', $_POST['WebsiteName']);

      if(!file_exists($_POST['WebsiteName']) )
      {
          mkdir('./'.$_POST['WebsiteName'], 0777, true);          
          $customerModel->testDrive($_POST);
          echo 'the process done successful';
          sleep(100);
          header('location: '.URL.'Home');
      }
      else{
        echo 'Try with a different wesite name';
      }
      
    }
}