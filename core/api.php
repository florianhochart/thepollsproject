<?php 
require_once "functions.php";
require_once "../config/config.php";

if (!isset($_POST['action'])) {
	return false;
}else{
	$cnx = mysqli_connect(
			$hostname,
			$username,
			$password,
			$database
		);
	$action = $_POST['action'];
}

?>