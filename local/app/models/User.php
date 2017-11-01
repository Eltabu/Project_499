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
        //print_r($result[0]);

        if ($result[0]->role == 1)
        {
            // role = 1 means admin
           return ['role'=> 1, 'username'=> $result[0]->fname];
        }
        else if ($result[0]->role == 2)
        {
            // role = 2 means customer
            return ['role'=> 2, 'username'=> $result[0]->fname];
        }
        else
        {
            // role = 0 means user does not exist in the database
            return ['role'=> 0, 'username'=> $result[0]->fname];
        }
    }
}