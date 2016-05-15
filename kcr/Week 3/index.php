<?php
	session_start();

	$conn = new PDO('mysql:host=localhost;dbname=minicms', 'root', '');

	if (!empty($_POST)) {
		$title = $_POST['title'];
		$article = $_POST['article'];

		$query = $conn->prepare("INSERT INTO blogposts (title, article) VALUES (:title, :article)");
		$query->bindParam(':title', $title);
		$query->bindParam(':article', $article);
		$query->execute();
	}

	$posts = $conn->prepare("SELECT * FROM blogposts ORDER BY id DESC");
	$posts->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MinIMD Blog</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<?php if ($_SESSION['loggedIn']): ?>
		<div id="container">
			<div id="site-title-cont">
	            <h1 id="site-title">MinIMD Blog</h1>
	        </div>

	        <a href="logout.php" id="logout">Log out</a>

			<div id="makePost">
				<form action="" method="post">
					<label for="title">Add a title</label>
					<input type="text" name="title" id="title" placeholder="Title">

					<label for="article">Write your article</label>
					<textarea name="article" id="article" cols="30" rows="10" placeholder="What do you want to tell the world?"></textarea>

					<button type="submit">Post</button>
				</form>
			</div>

			
			<?php while ($post = $posts->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="post">
					<h3><?php echo htmlspecialchars($post['title']) ?></h3>
					<p><?php echo htmlspecialchars($post['article']) ?></p>
				</div>
			<?php } ?>
		</div>
	<?php else: ?>
		<?php header('location: login.php') ?>;
	<?php endif ?>
		
</body>
</html>



