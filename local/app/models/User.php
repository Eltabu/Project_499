<?php 
class User {

	protected $vhsDatabase = new PDO("mysql:host=localhost;dbname=vhs",  "username", "password");

	protected $vhsResult = $vhsDatabase->query("SELECT * FROM user WHERE email = cj_fecteau@hotmail.com");
	
	 public function __construct($vhsResult) {
        $this->userId = $vhsResult['id'];
        $this->email = $vhsResult['email'];
        $this->firstName = $vhsResult['firstname'];
        $this->lastName = $vhsResult['lastname'];
        $this->password = $vhsResult['password'];
 	}
}
