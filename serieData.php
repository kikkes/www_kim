<?php
header('Content-Type: application/json');

//require_once('connect.php');     // You have access to $db_server here.


$link = mysqli_connect("localhost", "root", "", "episeries");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$serieName = $_GET["serieName"];
//$serieName = "Arrow";
/* Select queries return a resultset */
if ($result = mysqli_query($link, "SELECT * FROM `episodes` WHERE serieName = '$serieName'")) {
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
	$rows = array();
		while($row = $result->fetch_assoc()){
		
			$rows[] = $row;
		}
		
		echo json_encode($rows, JSON_PRETTY_PRINT);
		
		
		
		
    /* free result set */
    mysqli_free_result($result);
}



mysqli_close($link);
?>