<?php
  
	session_start();

	if (!isset($_SESSION['dateOPR'])){
		$_SESSION['dateOPR'] = 0;
	}

	function Connection(){
   // ec2-15-228-78-221.sa-east-1.compute.amazonaws.com
    $server="database-1.cscbnowewjwj.sa-east-1.rds.amazonaws.com";
		$user="admin";
		$pass="****";
		$db="sensor";



		$connection = mysqli_connect($server, $user, $pass) or die("Unable to Connect to '$server'");

		if (!$connection) {
		    die('MySQL ERROR: ' . mysqli_connect_error());
		}

		mysqli_select_db($connection,$db) or die( 'MySQL ERRO: '. mysqli_connect_error() );

		return $connection;
	}

?>
