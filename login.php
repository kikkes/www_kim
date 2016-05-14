<?php
header('Content-Type: application/json');

//require_once('connect.php');     // You have access to $db_server here.


$link = mysqli_connect("localhost", "root", "", "episeries");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$email = $_GET['email'];
$password = $_GET['password'];
$returnval = "false";
/* Select queries return a resultset */
$result = mysqli_query($link, "SELECT 'email','password' FROM 'users' WHERE email = '$email' AND password = '$password'");
//printf("Select returned %d rows.\n", mysqli_num_rows($result));


if( mysqli_num_rows($result) == 1) {
	$returnval = "true";
	echo json_encode($returnval);
}
else { echo json_encode($returnval);}
			
			
	echo json_encode ($result);
	





mysqli_close($link);
?>