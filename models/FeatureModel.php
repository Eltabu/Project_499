<?php

/**
 * class allowing us to connect to database
 */
class FeatureModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getFeatureFor($prodcutID)
    {
      $stmt = $this->db->prepare("CALL sp_get_feature_for(?)");

      $stmt->bindParam(1, $prodcutID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }

    public function getAdminFeatures()
    {
      $stmt = $this->db->prepare("CALL sp_admin_get_features()");

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }
    
    public function getCustomerDashboardFeatures()
    {
      $stmt = $this->db->prepare("CALL sp_customer_get_features()");

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }
    public function customerDashbardGetFeatureUpgrade($customerID)
    {
      $stmt = $this->db->prepare("CALL sp_customer_get_features_upgrade(?)");

      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }

    public function customerDashbardGetFeatureRemove($customerID)
    {
      $stmt = $this->db->prepare("CALL 	sp_customer_get_features_remove(?)");

      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }


}