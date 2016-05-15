

<?php
//login
session_start();
    if (isset($_POST['username']) && isset($_POST['password']))
    {
    if (!empty($_POST['username']) || !empty($_POST['password']))
    {
    if(!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
        $query = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $query->bindParam(':username', $username);
        $query->execute();
        
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $result['password'])) {
            
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['id'];
        } else {
            $feedback = "Verkeerd wachtwoord!";
        }
    
    }
    }
       
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KCR - Inloggen</title>
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
                            <li><a class="selected" href="login.php">Login</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav> 
				</header>
			</div>
			<!-- END MAIN HEADER -->

			<!-- START MAIN CONTENT -->
			<div class="container">
				<div class="title">
					Login
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
                    <div id="contLogin">
                       <h2 class="registering">Log hier in!</h2>

                        <form action="" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"/>

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"/>

                        <?php if (isset($feedback)) { ?>
                                <p id="feedback"><?php echo $feedback ?></p>
                        <?php } ?>

                        <button type="submit" id="btnLogin">Log in</button>
                        <div class="switchlogin">
                        <p>Nog geen account?</p>
                            <a href="register.php">Registreer hier!</a>
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