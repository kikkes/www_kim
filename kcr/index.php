<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KCR - Kim's Car Rental</title>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<meta name="viewport" content="width=device-width" initial-scale="1.0">
	</head>
	<body>
			<!-- START MAIN HEADER -->
			<div class="home-header">
				<header class="group">
					<a href="index.html" id="logo"><img src="img/KCR-Logo_white.svg" alt="logo"></a>
					<nav class="shadow">
						<ul>
							<li><a class="selected" href="index.php">Home</a></li>
							<li><a href="huren.php">Huren</a></li>
							<li><a href="register.php">Registreren</a></li>
                             <li><a href="login.php">Login</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					</header>
				<div class="centered-header">
					<h1> AUTO'S VOOR DE BESTE PRIJS </h1>
				</div>
			</div>
			<!-- END MAIN HEADER -->

			<!-- START MAIN CONTENT -->
			<div class="container">
				<div class="home-intro-wrapper">
					<div class="home-intro">
						<p>Bent u een echte autofanaat maar heeft u het geld niet om zelf een sportwagen te kopen?
                            Wel dan bent u bij KCR aan het juiste adres!</p>
						<a href="huren.php" class="callout"> Huur nu </a>
					</div>
				</div>
				<div class="double-content group">
					<div class="double-title">
					<h2>Goedkoop een auto huren in België bij KCR</h2>
					</div>
					<div class="column-one">
						<p>Wij hebben een groot gamma aan sportwagens die u kan huren voor een spotprijsje, zo kan u toch genieten van uw droom wagen die u anders misschien niet zou kunnen betalen! </p>
					</div>
					<div class="column-two">
						<p>één dag, een week, een maand. Het is allemaal mogelijk! Er zijn van elke wagen meerdere beschikbaar. Zodat u zeker kan zijn dat uw droom wagen snel beschikbaar is, voor hoe lang u maar wilt! </p>
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