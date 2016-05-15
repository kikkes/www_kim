<?php
header('Content-Type: application/json');

//require_once('connect.php');     // You have access to $db_server here.


$link = mysqli_connect("localhost", "root", "", "episeries");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$email = "kim@episeries.com";
$password = "lol";

$returnval = "false";
/* Select queries return a resultset */
//$result = mysqli_query($link, "SELECT 'email','password' FROM 'users' WHERE email = '$email' AND password = '$password'");
if ($result = mysqli_query($link, "SELECT 'email','password' FROM 'users' WHERE 'email' = '$email' AND 'password' = '$password'")) {
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
	$rows = array();
		while($row = $result->fetch_array(MYSQLI_NUM)){
		
			$rows[] = $row[0];
		}
		//$rows = $result->fetch_array(MYSQLI_NUM);
		
		echo json_encode($rows, JSON_PRETTY_PRINT);
		
		
		
		
    /* free result set */
    mysqli_free_result($result);
}



mysqli_close($link);
?>