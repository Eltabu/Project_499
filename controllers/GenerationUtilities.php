<?php

/**
 * Pricing class display the different type of products offered
**/
class GenerationUtilities
{
    /**
    * generateDatabase method to create database tables and SP based on the file in the queries
    **/
    public function generateDatabase($data)
    {
        $ounter = 1;
        $db_name = 'customer';

        // try to find an empty database
        while($ounter < 100)
        {
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
            
        
        try 
        {
            //Run the script to generate Tables and d Stored Procedures
            $dbh = new PDO('mysql:host=localhost;dbname='.$db_name, DB_USER, DB_PASSWORD);
            $location = "queries/base_db.sql";
            $quary =  file_get_contents($location ,FILE_USE_INCLUDE_PATH);
            $stmt = $dbh->prepare($quary);
            $stmt->execute();


            //inset into the database the admin info
            $password = md5($data['lastname']);
            $city = 'Windsor';
            $province = 'Ontario';
            $type = '1';
            
            $stmt = $dbh->prepare("INSERT INTO user (username, password, firstname, lastname, city,  province, type) VALUES (:username, :password, :firstname, :lastname, :city, :province, :type )");
            $stmt->bindParam(':username', $data['firstname']);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':firstname', $data['firstname']);
            $stmt->bindParam(':lastname', $data['lastname']);
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

    }//end generateDatabase method


    public function generateCoreFiles($data)
    {
        //website name without sapces
        $website_name = preg_replace('/\s+/', '', $data['companywebsiteName']);

        //Copy core files
        mkdir('./'.$data['WebsiteURL'], 0777, true);          
        $this->copyFiles('./local/app', './'.$data['WebsiteURL']);
        $this->copyFiles('./local/index.php', './'.$data['WebsiteURL']);
        //$this->copyFiles('./local/.htaccess', './'.$data['WebsiteURL']);

        //generate .htaccess file
        $myfile = fopen('./'.$data['WebsiteURL'].'/.htaccess', "w");
        fwrite($myfile, HTACCESS_BEGINNING."\n");
        fwrite($myfile, HTACCESS_PATH.$website_name.'/'."\n");
        fwrite($myfile, HTACCESS_END);
        fclose($myfile);


        //Modify to the paths files
        $myfile = fopen('./'.$data['WebsiteURL'].'/app/config/paths.php', "w");
        fwrite($myfile, PATH_SETTING. $website_name . '/' . '\');');
        fwrite($myfile, '    define(\'WEBSITE_NAME\',\'' . $data['WebsiteURL'] . '\');'  );
        fclose($myfile);


        // Add the DB name to dbconfig.php
        file_put_contents('./'.$data['WebsiteURL'].'/app/config/dbconfig.php', '  define(\'DB_NAME\',\'' . $db_name . '\');  ' . "\n",FILE_APPEND | LOCK_EX);
  

        

    }


    /**
    * function for copying files recursively
    **/
    private function copyFiles($src , $dest)
    {
      $output = shell_exec('cp -r '. $src .' '. $dest);
    }

}