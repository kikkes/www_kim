<?php
    if (!empty($_POST)) {
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $options = ['cost' => 12];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);

        $conn = new PDO('mysql:host=localhost;dbname=minicms', 'root', '');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="contSignUp">
        <div id="site-title-cont">
            <h1 id="site-title">kcr</h1>
        </div>

        <h2>Please sign up.</h2>

        <form action="" method="post" id="logIn">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname"/>

            <label for="name">Name</label>
            <input type="text" name="name" id="name"/>

            <label for="email">Email</label>
            <input type="text" name="email" id="email"/>

            <label for="username">Username</label>
            <input type="text" name="username" id="username"/>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"/>

            <button type="submit" id="btnSignUp">Sign up</button>
        </form>

        <p>Already have an account?</p>
        <a href="login.php">Log in here!</a>
    </div>
</body>
</html>

