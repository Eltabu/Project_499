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

    public function getProductInfo($customerID)
    {
      $stmt = $this->db->prepare("CALL sp_customer_product_info(?)");
      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }

    public function getProductFeatureCustomer($customerID)
    {
      $stmt = $this->db->prepare("CALL sp_customer_product_features(?)");
      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }

}