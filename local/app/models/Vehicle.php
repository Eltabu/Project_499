<?php 
class Vehicle extends Model{

	public $name;

	public function addVehicle($vehicleInfo = [])
	{

		$makes = getMakes();
		$models = getModels();

		$make = $vehicleInfo['make'];
		$model = $vehicleInfo['model'];
		$year = $vehicleInfo['year'];
		$mileage = $vehicleInfo['mileage'];
		$seats = $vehicleInfo['seats'];


		//CHECKING FOR EXISTENCE OF THE MAKE  OR MODEL IN THE DATABASE
		foreach($this->makes as $currentmakes)
		{
			if($make == $currentmakes)
			{
				foreach($this->models as $currentmodels)

					if($model == $currentmakes)
					{
						//make and model already in database
					}

					//add model to database
			}
			else
			{
				//add new make and model to database
			}
		}


		$stmt = $this->db->prepare("CALL sp_add_vehicle(?,?,?,?,?)");

		$stmt->bindParam(1, $make, PDO::PARAM_STR);
        $stmt->bindParam(2, $model, PDO::PARAM_STR);
        $stmt->bindParam(3, $year, PDO::PARAM_STR);
        $stmt->bindParam(3, $mileage, PDO::PARAM_STR);
        $stmt->bindParam(3, $seats, PDO::PARAM_STR);

        $stmt->execute();
	}
	
	public function getVehicles()
    {
         $stmt = $this->db->prepare("CALL sp_get_vehicles()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

    public function getModels()
    {
         $stmt = $this->db->prepare("CALL sp_get_models()");
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }

    public function getMakes()
    {
         $stmt = $this->db->prepare("CALL sp_get_makes()");
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
