<?php

/**
 * class allowing us to connect to database
 */
class TransactionModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function makeTransaction($custoemrID, $amount)
    {
      $stmt = $this->db->prepare("CALL sp_make_transaction(?,?)");

      $stmt->bindParam(1, $custoemrID, PDO::PARAM_STR);
      $stmt->bindParam(2, $amount, PDO::PARAM_STR);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result[0]->transaction_id;
    }

    public function customerGetPayments($customerID)
    {
      $stmt = $this->db->prepare("CALL 	sp_customer_get_payments(?)");

      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }
}
