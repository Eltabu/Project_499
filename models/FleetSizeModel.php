<?php

/**
 * class to allow us to connect to database 
 */
class FleetSizeModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getFleetSize()
    {
        $stmt = $this->db->prepare("CALL sp_get_fleet_size_list()");

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return  $result;
    }

    public function addFleetSize($name, $size, $id)
    {
        $stmt = $this->db->prepare("CALL sp_admin_update_fleet_size(?,?,?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $size, PDO::PARAM_INT);
        $stmt->bindParam(3, $id, PDO::PARAM_INT);

        $stmt->execute();

    }
}