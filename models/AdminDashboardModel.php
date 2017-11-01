<?php

/**
 * class allowing us to connect to database 
 */
class AdminDashboardModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getLatestCompanies()
    {
        $stmt = $this->db->prepare("CALL sp_admin_dashboard_latest_companies()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getTotalCustomers()
    {
        $stmt = $this->db->prepare("CALL sp_total_customer()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getTotalInquiries()
    {
        $stmt = $this->db->prepare("CALL sp_total_Inquiries()");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}