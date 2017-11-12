<?php 
class Location extends Model{

	public $name;

	public function addLocation($locationInfo = [])
	{

		$Name = $locationInfo['name'];
		$City = $locationInfo['city'];
		$Province = $locationInfo['province'];
		$Latitude = $locationInfo['latitude'];
		$Longitude = $locationInfo['longitude'];
		$Phone = $locationInfo['phone'];
		$PostalCode = $locationInfo['postal'];
		$Address = $locationInfo['address'];

		$stmt = $this->db->prepare("CALL sp_add_location(?,?,?,?,?,?,?,?)");

		$stmt->bindParam(1, $Name, PDO::PARAM_STR);
        $stmt->bindParam(2, $City, PDO::PARAM_STR);
        $stmt->bindParam(3, $Province, PDO::PARAM_STR);
        $stmt->bindParam(4, $Address, PDO::PARAM_STR);
        $stmt->bindParam(5, $Phone, PDO::PARAM_STR);
        $stmt->bindParam(6, $Latitude, PDO::PARAM_STR);
        $stmt->bindParam(7, $Longitude, PDO::PARAM_STR);
        $stmt->bindParam(8, $PostalCode, PDO::PARAM_STR);

        $stmt->execute();
	}
    
    public function getLocations()
    {
         $stmt = $this->db->prepare("CALL sp_get_locations()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }
	
}