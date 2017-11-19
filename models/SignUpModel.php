<?php

/**
 * class allowing us to connect to database
 */
class SignUpModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function purchaseProduct($data_fields = [], $nextPayment)
    {

        //print_r($data_fields);
        //echo $nextPayment;
        //company info
        $companyName = $data_fields['companyName'];
        $companywebsiteName = $data_fields['companywebsiteName'];
        $WebsiteURL = $data_fields['WebsiteURL'];
        $country = (int)$data_fields['country'];
        $companyemail = $data_fields['companyemail'];
        $companyphone = $data_fields['companyphone'];

        //Card Info
        $cardNumber = $data_fields['cardNumber'];
        $cardExpiryMM = $data_fields['cardExpiryMM'];
        $cardExpiryYY = $data_fields['cardExpiryYY'];
        $cardCVC = $data_fields['cardCVC'];
        $cardType = (int)$data_fields['cardType'];
        $cardHolderName = $data_fields['cardHolderName'];

        //Customer info
        $firstname = $data_fields['firstname'];
        $lastname = $data_fields['lastname'];
        $suffix = $data_fields['suffix'];
        $customerRole = (int)$data_fields['customerrole'];
        $customeremail = $data_fields['customeremail'];
        $customerphone = $data_fields['customerphone'];
        $productId = (int)$data_fields['produnct_id'];
        $passsword = md5($lastname);


        $stmt = $this->db->prepare("CALL sp_purchase_product(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindParam(1, $companyName, PDO::PARAM_STR);
        $stmt->bindParam(2, $companywebsiteName, PDO::PARAM_STR);
        $stmt->bindParam(3, $country, PDO::PARAM_INT);
        $stmt->bindParam(4, $companyemail, PDO::PARAM_STR);
        $stmt->bindParam(5, $companyphone, PDO::PARAM_STR);

        $stmt->bindParam(6, $cardType, PDO::PARAM_INT);
        $stmt->bindParam(7, $cardHolderName, PDO::PARAM_STR);
        $stmt->bindParam(8, $cardNumber, PDO::PARAM_STR);
        $stmt->bindParam(9, $cardExpiryYY, PDO::PARAM_STR);
        $stmt->bindParam(10, $cardExpiryMM, PDO::PARAM_STR);
        $stmt->bindParam(11, $cardCVC, PDO::PARAM_STR);

        $stmt->bindParam(12, $firstname, PDO::PARAM_STR);
        $stmt->bindParam(13, $lastname, PDO::PARAM_STR);
        $stmt->bindParam(14, $suffix, PDO::PARAM_STR);
        $stmt->bindParam(15, $firstname, PDO::PARAM_STR);
        $stmt->bindParam(16, $passsword, PDO::PARAM_STR);
        $stmt->bindParam(17, $customerRole, PDO::PARAM_INT);
        $stmt->bindParam(18, $customeremail, PDO::PARAM_STR);
        $stmt->bindParam(19, $customerphone, PDO::PARAM_STR);
        $stmt->bindParam(20, $productId, PDO::PARAM_INT);
        $stmt->bindParam(21, $WebsiteURL, PDO::PARAM_STR);
        $stmt->bindParam(22, $nextPayment, PDO::PARAM_STR);

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return  $result[0]->customer_id;
    }
}
