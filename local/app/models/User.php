<?php

/**
 * class to allow us to connect to database 
 */
class User extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function isUser($username = '', $password = '')
    {
        $stmt = $this->db->prepare("CALL sp_login(?,?)");

        // add parameters
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}