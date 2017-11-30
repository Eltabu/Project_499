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

    public function updateCusotmerCredential($customerID, $data)
    {

        $username = $data['username'];
        $password = md5($data['password']);

        $stmt = $this->db->prepare("CALL sp_customer_update_credentials(?,?,?)");

        $stmt->bindParam(1, $customerID, PDO::PARAM_INT);
        $stmt->bindParam(2, $username, PDO::PARAM_STR);
        $stmt->bindParam(3, $password, PDO::PARAM_STR);


        $stmt->execute();

    }

    public function updateCustomerCreditCard($customerID, $data)
    {

        $holdername = $data['holdername'];
        $cardnumber = $data['cardnumber'];
        $securitycode = $data['securitycode'];
        $year = $data['year'];
        $month = $data['month'];

        $stmt = $this->db->prepare("CALL sp_customer_update_credit(?,?,?,?,?,?)");

        $stmt->bindParam(1, $customerID, PDO::PARAM_INT);
        $stmt->bindParam(2, $cardnumber, PDO::PARAM_STR);
        $stmt->bindParam(3, $securitycode, PDO::PARAM_STR);
        $stmt->bindParam(4, $year, PDO::PARAM_STR);
        $stmt->bindParam(5, $month, PDO::PARAM_STR);
        $stmt->bindParam(6, $holdername, PDO::PARAM_STR);

        $stmt->execute();

    }

    public function updateCustomerInfo($customerID, $data)
    {

        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $suffix = $data['suffix'];
        $phone = $data['phone'];

        $stmt = $this->db->prepare("CALL sp_customer_update_info(?,?,?,?,?,?)");

        $stmt->bindParam(1, $customerID, PDO::PARAM_INT);
        $stmt->bindParam(2, $fname, PDO::PARAM_STR);
        $stmt->bindParam(3, $lname, PDO::PARAM_STR);
        $stmt->bindParam(4, $email, PDO::PARAM_STR);
        $stmt->bindParam(5, $suffix, PDO::PARAM_STR);
        $stmt->bindParam(6, $phone, PDO::PARAM_STR);

        $stmt->execute();
    }



}