<?php 
class Reservation extends Model{

	public $reservation;

	public function addReservation($ReservationInfo = [])
	{

		$User = 1;
		$ResId = "XPL7HB";
		$PickLoc = $ReservationInfo['pick_loc'];
		$DropLoc = $ReservationInfo['drop_loc'];
		$PickTime = $ReservationInfo['pick_time'];
		$DropTime = $ReservationInfo['drop_time'];
		$Vehicle = $ReservationInfo['vehicle'];

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

		$stmt = $this->db->prepare("CALL sp_add_reservation(?,?,?,?,?,?,?)");

		$stmt->bindParam(1, $User, PDO::PARAM_STR);
        $stmt->bindParam(2, $ResId, PDO::PARAM_STR);
        $stmt->bindParam(3, $PickLoc, PDO::PARAM_STR);
        $stmt->bindParam(4, $PickTime, PDO::PARAM_STR);
        $stmt->bindParam(5, $DropLoc, PDO::PARAM_STR);
        $stmt->bindParam(6, $DropTime, PDO::PARAM_STR);
        $stmt->bindParam(7, $Vehicle, PDO::PARAM_STR);
        
        mail("fecteauc@uwindsor.ca" , "Your Reservation Key" , "Here is your reservation key for Lancer Rental: ".$ResId);

        $stmt->execute();
	}
    
    public function getReservation($resId)
    {
         $stmt = $this->db->prepare("CALL sp_get_reservation(?)");

         $stmt->bindParam(1, $resId, PDO::PARAM_STR);

         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

    public function generateResId($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	
}