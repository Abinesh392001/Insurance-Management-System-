<?php
	session_start();
	include 'connection.php';

    if(isset($_POST('username'))){
	$username = $_SESSION["username"];

	$sql = "SELECT agent_id FROM agent WHERE agent_id = '$username'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
     
    }
}
    #
    #else {
	#header("Location: clientHome.php");
   #}
	
?>

