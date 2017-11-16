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
    * generate database for the new customer
    **/
    private function generate_database($location)
    {
      $ounter = 1;
      $db_name = 'customer';

      while($ounter < 100)
      {
        $svals = ['db_user'=> DB_USER , 'db_pass'=> DB_PASSWORD, 'db_host'=> DB_HOST, 'db_name'=>'customer2'];
        $db_name = 'customer'. (string) $ounter;  

        try 
        {
          $dbh = new PDO('mysql:host=localhost;dbname='.$db_name, DB_USER, DB_PASSWORD);
          $stmt = $dbh->prepare('SELECT COUNT(*) as number FROM information_schema.tables WHERE table_schema = \'' .$db_name. '\'');
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_OBJ);

          if ($stmt->rowCount() > 0)
          {
            if($result[0]->number  == 0)
            {
              break;
            }
          }      

          $dbh = null;
        } 
        catch (PDOException $e) 
        {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
        }
        $ounter++;   

      }//end while
           
      //Run the script to generate Tables and d Stored Procedures
      try 
        {
          $dbh = new PDO('mysql:host=localhost;dbname='.$db_name, DB_USER, DB_PASSWORD);
          $location = "queries/base_db.sql";
          $quary =  file_get_contents($location ,FILE_USE_INCLUDE_PATH);
          $stmt = $dbh->prepare($quary);
          $stmt->execute();

          $password = md5($_POST['LastName']);
          $city = 'Windsor';
          $province = 'Ontario';
          $type = 'admin';
          //inset into the database the admin info
          $stmt = $dbh->prepare("INSERT INTO user (username, password, firstname, lastname, city,  province, type) VALUES (:username, :password, :firstname, :lastname, :city, :province, :type )");
          $stmt->bindParam(':username', $_POST['FirstName']);
          $stmt->bindParam(':password', $password);
          $stmt->bindParam(':firstname', $_POST['FirstName']);
          $stmt->bindParam(':lastname', $_POST['LastName']);
          $stmt->bindParam(':city', $city);
          $stmt->bindParam(':province', $province );
          $stmt->bindParam(':type', $type);
          $stmt->execute();


          $dbh = null;
        } 
        catch (PDOException $e) 
        {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
        }

        return $db_name;
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

      $db_name = $this->generate_database($_POST['WebsiteName']);


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
          fwrite($myfile, '    define(\'WEBSITE_NAME\',\'' . $_POST['CompanyName'] . '\');'  );
          fclose($myfile);

          /*$myfile = fopen('./'.$_POST['WebsiteName'].'/app/config/dbconfig.php', "w");
          fwrite($myfile, '  define(\'DB_NAME\',\'' . $db_name . '\');  ' . "\n");
          fclose($myfile);*/

          file_put_contents('./'.$_POST['WebsiteName'].'/app/config/dbconfig.php', '  define(\'DB_NAME\',\'' . $db_name . '\');  ' . "\n",FILE_APPEND | LOCK_EX);


          $_POST['WebsiteName'] = URL.$_POST['WebsiteName']; //Update the path with the full link
          //$customerModel->testDrive($_POST);

          header('location: '.URL.'Congratulation?variable='.$_POST['WebsiteName'].'/');
      
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