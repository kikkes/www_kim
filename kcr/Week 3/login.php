<?php
    if(!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
        $query = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $query->bindParam(':username', $username);
        $query->execute();
        
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $result['password'])) {
            header('location: index.php');
            session_start();
            $_SESSION['loggedIn'] = true;
        } else {
            $feedback = "Wrong password!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in - MinIMD Blog</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="contLogin">
        <div id="site-title-cont">
            <h1 id="site-title">MinIMD</span> Blog</h1>
        </div>

        <h2>Please log in.</h2>

        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"/>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"/>

            <?php if (isset($feedback)) { ?>
                <p id="feedback"><?php echo $feedback ?></p>
            <?php } ?>

            <button type="submit" id="btnLogin">Log in</button>

            <p>Don't have an account yet?</p>
            <a href="signup.php">Sign up here!</a>
         </form>
    </div>
</body>
</html>


