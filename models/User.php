<?php

/**
 * class to allow us to connect to database 
 */
class User extends Model
{
    public function __construct()
    {
        parent::__construct();
        //echo md5('eltabu');
    }

    public function isUser()
    {
        $sth = $this->db->prepare("Select id From users Where
                             username = :username AND password = :password");
        $sth->execute(array(
            ':username' => $_POST['username'],
            'password' => md5($_POST['password'])
        ));

        $data = $sth->fetchAll();

        if ($sth->rowCount() == 1)
        {
           return TRUE; 
        }
        else 
        {
            FALSE;
        }

    }
}