<?php

/**
 * Function to query information based on
 * a parameter: in this case, location.
 *
 */

if (isset($_POST['submit']))
{
    
    try
    {
        require "./config.php";
        require "./common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT *
						FROM users
						WHERE locatie = :locatie";
        
        $locatie = $_POST['locatie'];
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':locatie', $locatie, PDO::PARAM_STR);
        $statement->execute();
        
        $result = $statement->fetchAll();
    }
    
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php require "templates/header.php"; ?>
		
<?php  
if (isset($_POST['submit'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Rezultat</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Nume</th>
					<th>Tipul Interventiei</th>
					<th>Operatiile Necesare</th>
					<th>Locatia Interventiei</th>
					<th>Societatatea</th>
					<th>Data Sesizarii</th>
					<th>Ora Sesizarii</th>
					<th>Timpul de Interventie</th>
					<th>Timpul de Diagnosticare</th>
					<th>Timpul de interventie previzionat</th>
					<th>Observatii</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["nume"]); ?></td>
				<td><?php echo escape($row["tip"]); ?></td>
				<td><?php echo escape($row["operatiuni"]); ?></td>
				<td><?php echo escape($row["locatie"]); ?></td>
				<td><?php echo escape($row["societatatea"]); ?></td>
				<td><?php echo escape($row["data_sesizarii"]); ?></td>
				<td><?php echo escape($row["ora_sesizarii"]); ?></td>
				<td><?php echo escape($row["timpul"]); ?></td>
				<td><?php echo escape($row["timpul2"]); ?></td>
				<td><?php echo escape($row["timpul3"]); ?></td>
				<td><?php echo escape($row["obs"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>Nu sa gasit nici un rezultat <?php echo escape($_POST['locatie']); ?>.</blockquote>
	<?php
	} 
}?> 

<h2>Cauta Fise dupa locatie</h2>

<form method="post">
	<label for="locatie">locatie</label>
	<input type="text" id="locatie" name="locatie">
	<input type="submit" name="submit" value="Vezi Rezultatul">
</form>
<a href="index.php">Inapoi Acasa</a>

<?php require "templates/footer.php"; ?>