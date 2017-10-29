<?php

/**
 * TestDrive class display registration form for free version of the system
**/
class TestDrive extends Controller
{

    public $countries;

    public function index()
    {
      $this->getCountries();      
      $this->view('TestDrive/index', ['viewName' => 'Test Drive']);
    }

    /**
    * retrieves the contries form the model
    **/
    public function getCountries()
    {
      $CountryCollectionModel = $this->model('CountryCollection');
      $this->countries = $CountryCollectionModel->getCountries();
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
          $this->copyFiles('./local/public', './'.$_POST['WebsiteName']);
          $this->copyFiles('./local/app', './'.$_POST['WebsiteName']);

          $customerModel->testDrive($_POST);

          header('location: '.URL.'Congratulation?variable='.URL.$_POST['WebsiteName'].'/public/');
      }
      else{
        echo 'Try with a different wesite name';
      }
     
    }

    /**
    * function for copying files recursively
    **/
    public function copyFiles($src , $dest)
    {
      $output = shell_exec('cp -r '. $src .' '. $dest);
      echo "<pre>$output</pre>";
    }


    /**
    * retrieves the contries form the model
    **/
    private function recurse_copy($src,$dst) 
    { 
      $dir = opendir($src); 
      @mkdir($dst); 
      while(false !== ( $file = readdir($dir)) ) { 
          if (( $file != '.' ) && ( $file != '..' )) { 
              if ( is_dir($src . '/' . $file) ) { 
                  recurse_copy($src . '/' . $file,$dst . '/' . $file); 
              } 
              else { 
                  copy($src . '/' . $file,$dst . '/' . $file); 
              } 
          } 
      } 
      closedir($dir); 
    }

    private function sendMail()
    {
      error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

      set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
      require_once "Mail.php";

      $host = "ssl://smtp.gmail.com";
      $username = "youremail@example.com";
      $password = "your email password";
      $port = "465";
      $to = "address_form_will_send_TO@example.com";
      $email_from = "youremail@example.com";
      $email_subject = "Subject Line Here: " ;
      $email_body = "whatever you like" ;
      $email_address = "reply-to@example.com";

      $headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
      $smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
      $mail = $smtp->send($to, $headers, $email_body);


      if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
      } else {
      echo("<p>Message successfully sent!</p>");
      }
    }


}