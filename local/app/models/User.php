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
        $stmt->bindParam(2, md5($password), PDO::PARAM_STR);
        
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function register($userInfo = [])
    {

      
        $password = md5($userInfo['password']);

        $userInfo['password'] = $password;

        $type = 2;

        $stmt = $this->db->prepare("CALL sp_register(?,?,?,?,?,?,?)");

        // add parameters
        $stmt->bindParam(1, $userInfo['username'], PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->bindParam(3, $userInfo['firstname'], PDO::PARAM_STR);
        $stmt->bindParam(4, $userInfo['lastname'], PDO::PARAM_STR);
        $stmt->bindParam(5, $userInfo['email'], PDO::PARAM_STR);
        $stmt->bindParam(6, $userInfo['phone'], PDO::PARAM_STR);
        $stmt->bindParam(7, $type, PDO::PARAM_STR);  

        $stmt->execute();
    }

     public function addAdmin($userInfo = [])
    {

        $password = md5($userInfo['password']);
        $type = 1;

        $stmt = $this->db->prepare("CALL sp_register(?,?,?,?,?,?,?)");

        // add parameters
        $stmt->bindParam(1, $userInfo['username'], PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->bindParam(3, " ", PDO::PARAM_STR);
        $stmt->bindParam(4, " ", PDO::PARAM_STR);
        $stmt->bindParam(5, $userInfo['email'], PDO::PARAM_STR);
        $stmt->bindParam(6, " ", PDO::PARAM_STR);
        $stmt->bindParam(7, $type, PDO::PARAM_STR);  

        $stmt->execute();
    }

    public function updateBasic($userInfo = []){

        $stmt = $this->db->prepare("CALL sp_update_user(?,?,?,?,?,?)");

        // add parameters
        $stmt->bindParam(1, $userInfo['username'], PDO::PARAM_STR);
        $stmt->bindParam(2, $userInfo['firstname'], PDO::PARAM_STR);
        $stmt->bindParam(3, $userInfo['lastname'], PDO::PARAM_STR);
        $stmt->bindParam(4, $userInfo['email'], PDO::PARAM_STR);
        $stmt->bindParam(5, $userInfo['phone'], PDO::PARAM_STR);
        $stmt->bindParam(6, $_SESSION['user_id'], PDO::PARAM_STR);  

        $stmt->execute();

    }

    public function getAccountInfo($userId)
    {
        $stmt = $this->db->prepare("CALL sp_accountinfo(?)");

        // add parameters
        $stmt->bindParam(1, $userId, PDO::PARAM_STR);
         
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}