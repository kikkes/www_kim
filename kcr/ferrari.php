<?php
$_SESSION['ferrari'] = true;

$conn = new PDO('mysql:host=localhost;dbname=kcr', 'root', '');
                $query = $conn->prepare('SELECT * FROM cars WHERE brand="ferrari"');
                $query->execute();
                while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <table >
                    <tr>
                        
                           <h2 class="registering"><?php echo htmlspecialchars($row['brand']) ."       ".htmlspecialchars($row['type'])?></h2>
                      
                        
                        </tr>
                    <tr>
                        <td >
                            <img src="cars/<?php echo htmlspecialchars($row['foto'])?>"
                        </td>
                        <td>
                          <button type="button" class="huren" name="<?php echo $row['id']?>" id="huren"> Huren</button> 
                        </td>
                        <td>
                         <?php if(isset($_SESSION['username']) && $_SESSION['username'] == "admin")
                            { ?>  <button type="button" class="huren" class="admin" action="delete.php" name=<?php echo $row['id']?> value=<?php echo $row['id']?> > Verwijderen</button> <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Prijs: &euro;<?php echo htmlspecialchars($row['price'])?>
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
            header( "Location: huren.php" );
            ?>   