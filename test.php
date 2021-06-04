<?php
function getConnection(){
		$username = "rmSUser";
		$password = '247*Rm$User£*21';
		$database = "rmsappdb_live";
		$host = "magentoaurora.cluster-co13c6zl8ys8.eu-west-1.rds.amazonaws.com";
		//$conn = mysqli_connect($host,$username,$password,$database);
		
		$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $conn;
	}

	$conn = getConnection();
	print_r($conn);