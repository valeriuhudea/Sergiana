<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit']))
{
    
    require "./config.php";
    require "./common.php";
    
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "nume" 				=> $_POST['nume'],
            "tip"				=> $_POST['tip'],
            "operatiuni"        => $_POST['operatiuni'],
            "locatie"   		=> $_POST['locatie'],
            "societatatea"      => $_POST['societatatea'],
            "data_sesizarii"  	=> $_POST['data_sesizarii'],
            "data_sesizarii"  	=> $_POST['data_sesizarii'],
            "ora_sesizarii"  	=> $_POST['ora_sesizarii'],
            "timpul"  			=> $_POST['timpul'],
            "timpul2"  			=> $_POST['timpul2'],
            "timpul3"  			=> $_POST['timpul3'],
            "timpul3"  			=> $_POST['timpul3'],
            "obs"  				=> $_POST['obs']
            
        );
        
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
            );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }
    
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
    
}
?>

<?php require "templates/header.php"; ?>

<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<blockquote><?php echo $_POST['nume']; ?> A fost adaugata cu scces</blockquote>
<?php 
} ?>

<h2>Adauga o fisa noua</h2>

<form method="post">
	<label for="nume">Nume</label>
	<input type="text" name="nume" id="nume">
	<label for="tip">Tipul interventiei</label>
	<input type="text" name="tip" id="tip">
	<label for="operatiuni">Operatiile Necesare (descriere)</label>
	<input type="text" name="operatiuni" id="operatiuni">
	<label for="locatie">Locatia Interventiei</label>
	<input type="text" name="locatie" id="locatie">
	<label for="societatatea">Societatatea</label>
	<input type="text" name="societatatea" id="societatatea">
	<label for="data_sesizarii">Data Sesizarii</label>
	<input type="text" name="data_sesizarii" id="data_sesizarii">
	<label for="ora_sesizarii">Ora Sesizarii</label>
	<input type="text" name="ora_sesizarii" id="ora_sesizarii">	
	<label for="timpul">Timpul de Interventie</label>
	<input type="text" name="timpul" id="timpul">		
	<label for="timpul2">Timpul de Diagnosticare</label>
	<input type="text" name="timpul2" id="timpul2">		
	<label for="timpul3">Timpul de interventie previzionat</label>
	<input type="text" name="timpul3" id="timpul3">		
	<label for="obs">Observatii</label>
	<input type="text" name="obs" id="obs">	
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Inapoi Acasa</a>

<?php require "templates/footer.php"; ?>