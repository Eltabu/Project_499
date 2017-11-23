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
      $db_name = $this->generateDB->generateDatabase($_POST);

      //generate the core files
      $this->generateDB->generateCoreFiles($_POST, $db_name);


      if($_POST['produnct_id'] == 2)// Standard Product
      {
        //echo 'Standred';
      }
      elseif ($_POST['produnct_id'] == 3)//Ultimate Product
      {
        //map feature
        $fp = fopen($_POST['WebsiteURL']."/app/views/Home/map.php", "w+");
        fwrite($fp, ' <div style="min-height:400px" id="map"></div>');
        fclose($fp);


        //support stream
        $fp = fopen($_POST['WebsiteURL']."/app/views/Admin/inquirymenu.php", "w+");
        fwrite($fp, ' <a href="<?php echo URL ?>Admin/inquiries" class="list-group-item"><span class="fa fa-question" aria-hidden="true"></span> Inquiries </a>');
        fclose($fp);
        $fp2 = fopen($_POST['WebsiteURL']."/app/controllers/config/inquirycontroller.php", "w+");
        fwrite($fp2, '<?php $this->view(\'Admin/inquiries\', [\'viewName\' => \'Admin Inquiries\']); ?>');
        fclose($fp2);
      }

      //save cusotmer info, credit card, and company to the database
      $nextPayment = new DateTime("+1 months");
      $customerID = $SignUpModel->purchaseProduct($_POST, $nextPayment->format("Y-m-d"));


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

    //get product features from the database
    $FeatureModel = $this->model('FeatureModel');
    $this->productFeatures = $FeatureModel->getFeatureFor($data['produnct_id']);

    //calcualte the the total price
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
                                  , 'InvoiceNumber' => $InvoiceNumber
                                  , 'websiteURL' => $data['WebsiteURL']]);
  }



}
