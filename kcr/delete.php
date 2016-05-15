<?php
//Delete 
session_start();
if(isset($_POST['verwijderen']) and is_numeric($_POST['verwijderen']))
{
    echo $_POST['verwijderen'];
        if($_SESSION['username'] == "admin") {
   
$conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
$query =DELETE FROM cars WHERE id=$_POST['verwijderen'] ;
if ($conn->query($query) === TRUE) {
    echo "succesvol verwijderd!";
}

$conn->close();

    }
}
?>
