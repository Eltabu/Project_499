<?php 

class Model
{
    function __construct(){
        try
        {
            $this->db = new Database();
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOEXCEPTION $e)
        {
            echo $e->getMessage(); //Should be removed 
        }
        
    }
}