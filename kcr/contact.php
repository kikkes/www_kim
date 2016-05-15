<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KCR - Contact</title>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<meta name="viewport" content="width=device-width" initial-scale="1.0">
	</head>
	<body>
			<!-- START MAIN HEADER -->
			<div class="main-header">
				<header class="group">
					<a href="index.php" id="logo"><img src="img/KCR-Logo_white.svg" alt="logo"></a>
					<nav>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="huren.php">Huren</a></li>
							<li><a href="register.php">Registreren</a></li>
                             <li><a href="login.php">Login</a></li>
							<li><a class="selected" href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</header>
			</div>
			<!-- END MAIN HEADER -->

			<!-- START MAIN CONTENT -->
			<div class="container">
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10049.041119156629!2d4.894220000000001!3d50.97437945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c143986d3e1f53%3A0x100da931522b4295!2s3202+Rillaar!5e0!3m2!1sen!2sbe!4v1429456227670" width="1300" height="540" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="double-content group">
					<div class="double-title">
					<h2>Contacteren</h2>
					</div>
					<div class="column-70">
						<p>Het is altijd mogelijk contact met ons op te nemen via dit emailadres. Op afspraak is het ook mogelijk om bij ons in de shop eens een kijkje te komen nemen naar alle beschikbare wagens</p>
					</div>
					<div class="column-20 small">
						<p>
						<a href="tel:04 000 00 00">04/74 59 64</a><br>
						<a href="mailto:kcr@gmail.com">kcr@gmail.com</a><br></p>
						<br>
						Diestsesteenweg 111<br>
						Rillaar<br>
						België
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->

			<!-- BEGIN FOOTER CONTENT -->
			<footer>
				<span> © 2015 KCR | <span style="font-weight: 400">KIM'S CAR RENTAL</span></span>
			</footer>
			<!-- BEGIN FOOTER CONTENT -->
	</body>
</html>