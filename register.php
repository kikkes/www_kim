<?php
header('Content-Type: application/json');

//require_once('connect.php');     // You have access to $db_server here.


$link = mysqli_connect("localhost", "root", "", "episeries");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//$email = "kim";
//$password = "kim";
$email = $_GET['email'];
$password = $_GET['password'];
$returnval = "false";
/* Select queries return a resultset */
//$result = mysqli_query($link, "SELECT 'email','password' FROM 'users' WHERE email = '$email' AND password = '$password'");
$result = mysqli_query($link, "INSERT INTO `users`(`email`, `password`) VALUES ('".$email."','".$password."')");
//printf("Select returned %d rows.\n", mysqli_num_rows($result));


if($result == false) {
	echo json_encode($returnval);
}
else { 
	$returnval = "true";
	echo json_encode($returnval);
	}
			
			

	





mysqli_close($link);
?>