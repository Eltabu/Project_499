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


/*
    public function getLatestCompanies()
    {
        $stmt = $this->db->prepare("CALL sp_admin_dashboard_latest_companies()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }*/
}