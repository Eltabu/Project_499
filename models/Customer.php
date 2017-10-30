<?php

/**
 * class to allow us to connect to database 
 */
class Customer extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    /* function to save the campany and the user information for test drive version  
    */
    public function testDrive($userInfo = [])
    {
        $CompanyName = $userInfo['CompanyName'];
        $FirstName = $userInfo['FirstName'];
        $LastName = $userInfo['LastName'];
        $Email = $userInfo['Email'];
        $Phone = $userInfo['Phone'];
        $WebsiteName = $userInfo['WebsiteName'];       
        $countries = (int)$userInfo['countries'];
        $yourrole = (int)$userInfo['yourrole'];
        $fleetsize = (int)$userInfo['fleetsize'];
        $theme = (int)$userInfo['theme'];
        $passsword = md5($LastName);


        $stmt = $this->db->prepare("CALL sp_test_drive(?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindParam(1, $CompanyName, PDO::PARAM_STR);
        $stmt->bindParam(2, $FirstName, PDO::PARAM_STR);
        $stmt->bindParam(3, $LastName, PDO::PARAM_STR);
        $stmt->bindParam(4, $Email, PDO::PARAM_STR);
        $stmt->bindParam(5, $Phone, PDO::PARAM_STR);
        $stmt->bindParam(6, $WebsiteName, PDO::PARAM_STR);        
        $stmt->bindParam(7, $countries, PDO::PARAM_INT);
        $stmt->bindParam(8, $yourrole, PDO::PARAM_INT);
        $stmt->bindParam(9, $fleetsize, PDO::PARAM_INT);
        $stmt->bindParam(10, $theme, PDO::PARAM_INT);
        $stmt->bindParam(11, $FirstName, PDO::PARAM_STR);
        $stmt->bindParam(12, $passsword, PDO::PARAM_STR);
       

        $stmt->execute();
        
    }



    /*
    /* function to retrieve the Customers data form the dtatbase 
    */
    public function getCustomers()
    {
         $stmt = $this->db->prepare("CALL sp_get_countries()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }
}

