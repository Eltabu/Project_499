<?php

/**
 * class to allow us to connect to database 
 */
class CountryCollection extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*
    /* function to retrieve the country data form the dtatbase 
    */
    public function getCountries()
    {
         $stmt = $this->db->prepare("CALL sp_get_countries()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

    public function addCountryName($name, $id)
    {
        $stmt = $this->db->prepare("CALL sp_admin_add_country(?,?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $id, PDO::PARAM_INT);

        $stmt->execute();

    }

}