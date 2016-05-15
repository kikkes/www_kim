<?php
//add content
session_start();
    if (!empty($_POST) ) {
        $type = htmlspecialchars($_POST['type']);
        $brand = htmlspecialchars($_POST['brand']);
        $pk = htmlspecialchars($_POST['pk']);
        $price = htmlspecialchars($_POST['price']);
        $options = htmlspecialchars($_POST['options']);
        $year = htmlspecialchars($_POST['year']);
        $zerotosixty = htmlspecialchars($_POST['zerotosixty']);
        $foto = htmlspecialchars($_POST['foto']);
        $mpg = htmlspecialchars($_POST['mpg']);
        $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
        $query = $conn->prepare('INSERT INTO cars (type, brand, pk, price, options, year, zerotosixty, foto, mpg) VALUES (:type, :brand, :pk, :price, :options, :year, :zerotosixty, :foto, :mpg)');
        $query->bindParam(':type', $type);
        $query->bindParam(':brand', $brand);
        $query->bindParam(':pk', $pk);
        $query->bindParam(':mpg', $mpg);
        $query->bindParam(':price', $price);
        $query->bindParam(':options', $options);
        $query->bindParam(':year', $year);
        $query->bindParam(':zerotosixty', $zerotosixty);
        $query->bindParam(':foto', $foto);
        $query->execute();

        header('location: huren.php');
        }
    
?>

<?php
//delete
        if(isset($_GET['action']) && ($_GET['action']=="delete")) 
        {  
            $id=$_GET['id'];
            echo $id;
            $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
            $query = $conn->prepare("DELETE FROM cars WHERE id='".$id."'");
            $query->execute();
            
            header('location:huren.php');
            }  

    ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>KCR - Huren</title>
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
							<li><a class="selected" href="huren.php">Huren</a></li>
							<li><a href="register.php">Registreren</a></li>
                             <li><a href="login.php">Login</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</header>
			</div>
			<!-- END MAIN HEADER -->

			<!-- START MAIN CONTENT -->
			<div class="container">
                <div id="choosing">
                   
                   
                    <a href="huren.php?action=lamborghini" ><img src="img/Lamborghini_Logo.svg.png"></a>
                    <a href="huren.php?action=porsche" ><img src="img/porsche-vector-logo.png"></a>
                    <a href="huren.php?action=audi" ><img src="img/audi_logo.svg_.png"></a>
                     <a href="huren.php?action=ferrari" ><img src="img/Ferrari-Logo.svg"></a>
                     <a href="huren.php?action=bmw" ><img src="img/480px-BMW.svg.png"></a>
                    </div>
				<div class="title">
					Huren
				</div>
				<div class="single-content">
                    <?php if(isset($_SESSION['username']) && $_SESSION['username'] == "admin")
                    { ?>
					<div id="addCont">
                        <h2 class="registering">Autos toevoegen!</h2>

                        <form action="" method="post" id="add">
                            <label for="type">Type</label>
                                <input type="text" name="type" id="type" required/>

                                <label for="brand">Merk</label>
                                <input type="text" name="brand" id="brand" required />

                                <label for="pk">PK</label>
                                <input type="text" name="pk" id="pk" required />

                                <label for="mpg">Verbruik per 100km</label>
                                <input type="text" name="mpg" id="mpg" required/> 
                            
                                <label for="price">Prijs per dag</label>
                                <input type="text" name="price" id="price" required/>
                                
                                <label for="options">Opties</label>
                                <input type="text" name="options" id="options" required/>
                            
                                <label for="year">Bouwjaar</label>
                                <input type="text" name="year" id="year" required/>
                            
                                <label for="zerotosixty">0 tot 100</label>
                                <input type="text" name="zerotosixty" id="zerotosixty" required/>
                                
                                <label for="foto">Foto</label>
                                <input type="text" name="foto" id="foto" required/>

                                <button type="submit" id="btnAdd">Toevoegen</button>
                             
                            </form>
                        </div>
                    <?php } ?>
                    
                    
                    <div class="CSSTableGenerator" >
                        
                        <?php
                
                $conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
                if(isset($_GET['action']) && $_GET['action'] =="lamborghini") {
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="Lamborghini"');
                }
                elseif(isset($_GET['action']) && $_GET['action'] =="ferrari") {
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="ferrari"');
                }
                elseif(isset($_GET['action']) && $_GET['action'] =="audi") {
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="audi"');
                }
                elseif(isset($_GET['action']) && $_GET['action'] =="bmw") {
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="bmw"');
                }
                elseif(isset($_GET['action']) && $_GET['action'] =="porsche") {
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="Porsche"');
                }

                else {
                $query = $conn->prepare('SELECT * FROM cars');
                }
                $query->execute();
                while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $id=$row['id'];
                ?>
                        
                <table >
                    <tr>
                        
                           <h2 class="registering"><?php echo htmlspecialchars($row['brand']) ." ".htmlspecialchars($row['type'])?></h2>
                      
                        
                        </tr>
                    <tr>
                        <td >
                            <img src="cars/<?php echo htmlspecialchars($row['foto'])?>"
                        </td>
                        <td>
                            <?php if(isset($_SESSION['username']))
                        { ?> <a href="boeken.php"><button type="button" class="huren" name="<?php echo $row['id']?>" id="huren"> Huren </button> </a> <?php } ?>
                        </td>
                        <td>
                         <?php if(isset($_SESSION['username']) && $_SESSION['username'] == "admin")
                            
                            { 
                            ?>  <form action="huren.php?action=delete&id=<?php echo $id; ?>" method="post"><button type="submit" class="huren" class="admin" > Verwijderen</button></form> <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Prijs: &euro;<?php echo htmlspecialchars($row['price'])?> per dag
                        </td>
                        <td>
                            Opties:
                        </td>
                        <td>
                            Performance:
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Bouwjaar: <?php echo htmlspecialchars($row['year'])?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($row['options'])?>
                        </td>
                        <td>
                            PK: <?php echo htmlspecialchars($row['pk'])?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            0 tot 100: <?php echo htmlspecialchars($row['zerotosixty'])?> s
                        </td>
                    </tr>
                    <tr>
                        <td >
                            
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            Verbruik: <?php echo htmlspecialchars($row['mpg'])?> l/100km
                        </td>
                    </tr>
                </table>

            <?php
            }
        
            ?>   
                        
            </div>
            
               
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