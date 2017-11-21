<?php

/**
 * class to allow us to connect to database 
 */
class ProductModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    /*
    /* function to retrieve the country data form the dtatbase 
    */
    public function adminGetProducts()
    {
         $stmt = $this->db->prepare("CALL sp_admin_get_products_usage()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

}