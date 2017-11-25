<?php 

class Ticket extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTickets()
    {
      $stmt = $this->db->prepare("CALL sp_get_tickets()");

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }


    public function getTicketsForCustomer($customerID)
    {
      $stmt = $this->db->prepare("CALL sp_get_customer_tickets(?)");
      $stmt->bindParam(1, $customerID, PDO::PARAM_INT);

      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return  $result;
    }


    public function saveReplay($data, $time, $adminID)
    {

        $ticketID = $data['id'];
        $replay = $data['replay'];                  
        
        
        $stmt = $this->db->prepare("CALL sp_admin_replay(?,?,?,?)");
        
        $stmt->bindParam(1, $ticketID, PDO::PARAM_INT);
        $stmt->bindParam(2, $replay, PDO::PARAM_STR);
        $stmt->bindParam(3, $adminID, PDO::PARAM_INT);
        $stmt->bindParam(4, $time, PDO::PARAM_STR);

        $stmt->execute();
    
    }

    public function customerSendMessage($customerID, $message, $subject)
    {            
        
        
        $stmt = $this->db->prepare("CALL sp_customer_send_message(?,?,?)");
        
        $stmt->bindParam(1, $subject, PDO::PARAM_STR);
        $stmt->bindParam(2, $message, PDO::PARAM_STR);
        $stmt->bindParam(3, $customerID, PDO::PARAM_INT);

        $stmt->execute();
    
    }



}