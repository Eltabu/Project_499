<?php

/**
 * class to allow us to connect to database 
 */
class TicketModel extends Model
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



}