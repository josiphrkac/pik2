<?php 
class Database
{
    public $servername;
    public $user;
    public $password;
	public $database;


	public function connect()
	{
		$this->servername = "localhost";
		$this->user= "samsung";
		$this->password = "1234";
		$this->database = "pik";
		$conn = new mysqli($this->servername, $this->user, $this->password, $this->database);
		return $conn;
	}


}
	
   ?>