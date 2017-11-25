<?php

/**
 * class to allow us to connect to database 
 */
class CustomerDashboardModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getCustomerDashboardInfo($customerID)
    {
        $stmt = $this->db->prepare("CALL sp_customer_dashboard(?)");

        $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return  $result;
    }



}