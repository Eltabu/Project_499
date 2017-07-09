<?php
/**
 * class to allow us to connect to database 
 */
class Database extends PDO
{
    public function  __construct()
    {
        parent::__construct('mysql:host=localhost; dbname=vrs', 'eltabu', 'password');
    }
}