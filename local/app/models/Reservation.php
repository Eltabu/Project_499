<?php 
class Reservation extends Model{

	public $reservation;

	public function addReservation()
	{

		if(!isset($_SESSION['user_id']))
      {
        header('location: '.URL.'Login');
      }

      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $resId = '';

    for ($i = 0; $i < 7; $i++) {
        $resId .= $characters[rand(0, $charactersLength - 1)];
    }

      	$pickup = explode(" ", $_POST['pick_time']);
      	$dropoff = explode(" ", $_POST['drop_time']);

		$user = $_SESSION['user_id'];
		$pickloc = $_POST['pick_loc'];
		$droploc = $_POST['drop_loc'];

		$pickdate = $pickup[0];
		$dropdate = $dropoff[0];

		$picktime = $pickup[1];
		$droptime = $dropoff[1];
		$vehicle = $_POST['vehicle'];

		$check = 0;
		
		// while($check == 0)
		// {
		// 	//Generate a unique reservation id and check if it exists in the db
		// 	$ResId = generateResId();
		// 	$checkstmt = $this->db->prepare("CALL sp_check_res_id(?)");
		// 	$checkstmt->bindParam(1, $ResId, PDO::PARAM_STR);

		// 	$checkstmt->execute();

		// 	if($checkstmt)
		// 	{
		// 		$check = 1;
		// 	}
		// }

		$stmt = $this->db->prepare("CALL sp_add_reservation(?,?,?,?,?,?,?,?,?)");

		$stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $resId, PDO::PARAM_STR);
        $stmt->bindParam(3, $pickloc, PDO::PARAM_STR);
        $stmt->bindParam(4, $picktime, PDO::PARAM_STR);
        $stmt->bindParam(5, $pickdate, PDO::PARAM_STR);
        $stmt->bindParam(6, $droploc, PDO::PARAM_STR);
        $stmt->bindParam(7, $droptime, PDO::PARAM_STR);
        $stmt->bindParam(8, $dropdate, PDO::PARAM_STR);
        $stmt->bindParam(9, $vehicle, PDO::PARAM_STR);
        
  //       $headers =  'MIME-Version: 1.0' . "\r\n"; 
		// $headers .= 'From: Your name <info@cruzecarrental.com>' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

  //       mail("fecteauc@uwindsor.ca" , "Your Reservation Key" , "Here is your reservation key for Lancer Rental: ".$resid. " ", $headers);

        $stmt->execute();
	}
    
    public function getReservations()
    {
    	 
         $stmt = $this->db->prepare("CALL sp_get_reservations(?)");

         $stmt->bindParam(1, $_SESSION['user_id'], PDO::PARAM_STR);

         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

        public function cancelReservation($resid)
    {
    	 echo "<script>debugger;</script>";
    	 echo "<script>console.log('".$resid."');</script>";
         $stmt = $this->db->prepare("CALL sp_cancel_reservation(?, ?)");

         $stmt->bindParam(1, $_SESSION['user_id'], PDO::PARAM_STR);
         $stmt->bindParam(2, $resid, PDO::PARAM_STR);

         $stmt->execute();
    }


    public function checkout()
	{

		$user = $_POST['user'];
		$type = $_POST['type'];
		$cardnum = $_POST['cardNumber'];
		$total = 19.99;

		$stmt = $this->db->prepare("CALL sp_checkout(?,?,?,?)");

		$stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $type, PDO::PARAM_STR);
        $stmt->bindParam(3, $cardnum, PDO::PARAM_STR);
        $stmt->bindParam(4, $total, PDO::PARAM_STR);
        
        $stmt->execute();
	}
	
}