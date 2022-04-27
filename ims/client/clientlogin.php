<?php
	session_start();
	include 'connection.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
	}
	
	$sql = "SELECT client_password from client where client_id='$username'";
	$result = $conn->query($sql);        

    while($row = $result->fetch_assoc()) {
		if($password == $row["client_password"]){
			echo "welcome you have successfully loged in";
			$_SESSION["username"] = $username;
			header("Location: chome.php");
		}
    }
	
	if(!isset($_SESSION["username"])){
		header("Location: index.php");
	}
?>