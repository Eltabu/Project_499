<?php 
class Vehicle extends Model{

	public $name;

	public function addVehicle($vehicleInfo = [])
	{

		$class = 2;
		$make = $vehicleInfo['make'];
		$model = $vehicleInfo['model'];
		$year = $vehicleInfo['year'];
		$mileage = $vehicleInfo['mileage'];
		$seats = $vehicleInfo['seats'];
        $location = 1;
		$image = $_FILES["image"]["name"];

        // $directory = 'C:\xampp\htdocs\moad\project\local\app\images/vehicles/';

        $directory = dirname(__FILE__, 2)."/images/vehicles/";

        if(move_uploaded_file($_FILES['image']['tmp_name'], $directory.$image))
            {

	$stmt = $this->db->prepare("CALL sp_add_vehicle(?,?,?,?,?,?,?,?)");

		$stmt->bindParam(1, $class, PDO::PARAM_STR);
		$stmt->bindParam(2, $model, PDO::PARAM_STR);
        $stmt->bindParam(3, $year, PDO::PARAM_STR);
        $stmt->bindParam(4, $mileage, PDO::PARAM_STR);
        $stmt->bindParam(5, $seats, PDO::PARAM_STR);
        $stmt->bindParam(6, $location, PDO::PARAM_STR);
        $stmt->bindParam(7, $image, PDO::PARAM_STR);
        $stmt->bindParam(8, $make, PDO::PARAM_STR);

        $stmt->execute();
    }

	}
	
	public function getVehicles()
    {

        $filter = 1;

         $stmt = $this->db->prepare("CALL sp_get_vehicles(?)");

                 $stmt->bindParam(1, $filter, PDO::PARAM_STR);
                 
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

    public function getClasses()
    {
         $stmt = $this->db->prepare("CALL sp_get_classes()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }
}
