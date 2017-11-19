<?php

require_once('GenerationUtilities.php');

/**
 * ProductInfo class display information about the rental system
**/
class SignUp extends Controller
{

  public $product_id = 0;

  public function index()
  {
    $CountryCollectionModel = $this->model('CountryCollection');
    $this->countries = $CountryCollectionModel->getCountries();
    $this->view('SignUp/index', ['viewName' => 'SignUp', 'produnct_id'=> $_GET["produnct_id"]]);
  }



  public function purchase()
  {
    $SignUpModel = $this->model('SignUpModel');

    $_POST['WebsiteURL'] = 'cloud/'.preg_replace('/\s+/', '', $_POST['companywebsiteName']);
    //print_r($_POST);//testing

    if(!file_exists($_POST['WebsiteURL']))//check if the website name already exist
    {

      $this->generateDB = new GenerationUtilities();

      //generate the database
      //$db_name = $this->generateDB->generateDatabase($_POST);

      //generate the core files
      //$db_name = $this->generateDB->generateCoreFiles($_POST);


      if($_POST['produnct_id'] == 2)// Standard Product
      {
        //echo 'Standred';
      }
      elseif ($_POST['produnct_id'] == 3)//Ultimate Product
      {
        //echo 'Ultimate';
      }

      //save cusotmer info, credit card, and company to the database
      //$nextPayment = new DateTime("+1 months");
      //$customerID = $SignUpModel->purchaseProduct($_POST, $nextPayment->format("Y-m-d"));


      //display the invoice
      $this->invoice($_POST, $customerID = 2);


    }
    else
    {
      $message = 'Please try with a different wesite name';
      $this->view('Error/index', ['viewName' => 'Error', 'message' => $message]);
    }
  }


  private function invoice($data, $customerID)
  {

    ($data['produnct_id'] == 3) ? $subtotal = 399.99: $subtotal = 199.99;

    //calll the database to save the transaction and get InvoiceNumber
    $TransactionModel = $this->model('TransactionModel');
    $InvoiceNumber = $TransactionModel->makeTransaction($customerID, $subtotal);

    //display the invoice
    $customerName = $data['suffix'] . ' ' .  $data['firstname'] . ' ' .  $data['lastname'];
    $cardLastDigit = substr( (string)$data['cardNumber'], -4);

    $this->view('SignUp/invoice', ['viewName' => 'invoice'
                                  , 'customerName'=> $customerName
                                  , 'phone' => $data['customerphone']
                                  , 'email' => $data['customeremail']
                                  , 'companyName' => $data['companyName']
                                  , 'cardLastDigit' => $cardLastDigit
                                  , 'subtotal' => $subtotal
                                  , 'InvoiceNumber' => $InvoiceNumber ]);
  }



}
