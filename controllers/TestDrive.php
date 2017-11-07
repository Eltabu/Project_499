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
    * register new customer with free 30 days verstion of the system
    **/
    public function register()
    {

      $customerModel = $this->model('Customer');

      //Update the location path
      $website_name = preg_replace('/\s+/', '', $_POST['WebsiteName']);  
      $_POST['WebsiteName'] = 'cloud/'.preg_replace('/\s+/', '', $_POST['WebsiteName']);

      if(!file_exists($_POST['WebsiteName']) ) // Check of the name already exit in the cloud
      {
          mkdir('./'.$_POST['WebsiteName'], 0777, true);          
          $this->copyFiles('./local/app', './'.$_POST['WebsiteName']);
          $this->copyFiles('./local/index.php', './'.$_POST['WebsiteName']);
          $this->copyFiles('./local/.htaccess', './'.$_POST['WebsiteName']);   

          //Write to .htaccess file
          $myfile = fopen('./'.$_POST['WebsiteName'].'/.htaccess', "w");
          fwrite($myfile, HTACCESS_BEGINNING."\n");
          fwrite($myfile, HTACCESS_PATH.$website_name.'/'."\n");
          fwrite($myfile, HTACCESS_END);
          fclose($myfile);

          $myfile = fopen('./'.$_POST['WebsiteName'].'/app/config/paths.php', "w");
          fwrite($myfile, PATH_SETTING. $website_name . '/' . '\');');
          fclose($myfile);


          $_POST['WebsiteName'] = URL.$_POST['WebsiteName']; //Update the path with the full link
          $customerModel->testDrive($_POST);

          header('location: '.URL.'Congratulation?variable='.URL.$_POST['WebsiteName'].'/');
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
      //echo "<pre>$output</pre>";
    }


    /**
    * function for copying files recursively
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
      
    }


}