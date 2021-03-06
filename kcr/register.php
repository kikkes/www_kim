<?php session_start(); ?>


<?php
//register
    if (!empty($_POST) && isset($_POST['firstname']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $name = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $options = ['cost' => 12];
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT, $options);

        $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
        $query = $conn->prepare('INSERT INTO users (firstname, name, email, username, password) VALUES (:firstname, :name, :email, :username, :password)');
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();

        header('location: login.php');
        }
    
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KCR - Registreren</title>
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
							<li><a class="selected" href="register.php">Registreren</a></li>
                            <li><a href="login.php">Login</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav> 
				</header>
			</div>
			<!-- END MAIN HEADER -->

			<!-- START MAIN CONTENT -->
			<div class="container">
				<div class="title">
					Registreren
				</div>
				<div class="single-content">
                    
                    <?php if(isset($_SESSION['username']))
                    { ?>
                    <div id="contLogout">
                       <h2 class="registering">Uitloggen!</h2>
                        <div class="switchlogin">
                            <p>Je bent ingelogd</p>
                            <form class="form" id="logoutform" action="logout.php" method="post">
		                      <button type="submit" name="logout" value="Logout">Logout</button>
                            </form>
                        </div>
                        </form>
                    </div>
                    <?php }
					else { ?>
                    <div id="contSignUp">
                        <h2 class="registering">Registreer hier!</h2>

                        <form action="" method="post" id="logIn">
                            <label for="firstname">First name</label>
                                <input type="text" name="firstname" id="firstname" required/>

                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" required />

                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required />

                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" required/>

                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required/>

                                <button type="submit" id="btnSignUp">Registreren</button>
                             <div class="switchlogin">
                            <p>Al een account?</p> 
                            <a href="login.php">Log hier in!</a>
                            </div>
                            </form>
                        </div>
                        <?php } ?>
                    
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