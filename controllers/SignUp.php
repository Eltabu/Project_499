<?php

/**
 * ProductInfo class display information about the rental system
**/
class SignUp extends Controller
{

  public $product_id = 0;

  public function index()
  {
    $this->product_id  = $_GET["produnct_id"];
    $this->view('SignUp/index', ['viewName' => 'SignUp']);
  }







  public function purchase()
  {
    $SignUpModel = $this->model('SignUpModel');

    //get product form the database 
    //generate the database
    //generate the files
    //generate the config files    

    $this->view('SignUp/invoice', ['viewName' => 'invoice']);
  }



}
