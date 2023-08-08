<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "test_petadoptionsys";

	$con = mysqli_connect($server, $user, $pass, $database);

	if (!$con) {
		die ("<script>alert('Connection Failed')</script>");
	}


?>
<!-- public function getData(){
		$sql = "SELECT * FROM marketplace_product";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)>0){
			return $result;
			
		}
	} -->

<!-- class marketplace_db
{
	public $servername;
	public $username;
	public $password;
	public $dbname;
	public $tablename;
	public $con;
	
	//public constructor
	public function_construct(
		$dbname	= "pet_adoption_system",
		$tablename = "marketplace_product",
		$servername	= "localhost",
		$username = "root",
		$password = "",
		)

	{
		$this -> dbname = $dbname;
		$this -> tablename = $tablename;
		$this -> servername	= $servername;
		$this -> username = $username;
		$this -> password = $password;

		//Create connection
		$this->con = mysqli_connect($servername, $username, $password);

		//Check connection
		if (!$this->con){
			die("Connection failed:".mysqli_connect_error());
		}

		//Query
		$sql="CREATE DATABASE IF NOT EXISTS $dbname";

		//execute query
		if(mysqli_query($this->con, $sql)){
			$this->con=mysqli_connect($servername,$username, $password, $dbname);

			//sql to create new table
			$sql="CREATE TABLE IF NOT EXISTS $tablename
					(id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					product_name VARCHAR(100) NOT NULL,
					product_new_price FLOAT,
					product_old_price FLOAT,
					product_image VARCHAR(100),
					product_detail VARCHAR(255)
					);";

		if(!mysqli_query($this->con,$sql)){
			echo "Error creating table:".mysqli_error($this->con);
		}
					
		}else{
			return false;
		}
	}

} -->