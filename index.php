<?php

//require_once('connect.php');     // You have access to $db_server here.

if(isset($_POST['submit'])&& !empty($_POST["submit"])) {
	echo"lol";
$link = mysqli_connect("localhost", "root", "", "episeries");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$serie = $_POST['serie'];

/* Select queries return a resultset */
if ($result = mysqli_query($link, "SELECT * FROM 'episodes' WHERE 'serie' = $serie")) {
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
	$rows = array();
		while($row = $result->fetch_assoc()){
		
			print($row);
		}
		
		
    /* free result set */
    mysqli_free_result($result);
}



mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Episeries</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
	<link id="stylecall" rel="stylesheet" href="wampthemes/classic/style.css" />
	<link rel="shortcut icon" href="index.php?img=favicon" type="image/ico" />
</head>

<body>
	<form method="post">
	<input type="text" name="serie" value="gief input"><br><br>
	<input type="submit" value="Submit">
	
	</form>

  


</body>
</html>



