<?php include "templates/header.php"; ?><h2>Creaza o fisa</h2>

<form method="post">
	<label for="nume">Cine a Realizeaza Interventia</label>
	<input type="text" name="nume" id="nume">
	<label for="timp">Timpul Interventiei</label>
	<input type="text" name="timp" id="timp">
	<label for="operatiuni">Operatiuni necesare (descriere)</label>
	<input type="text" name="operatiuni" id="operatiuni">
	<label for="locatie">Locatia interventiei</label>
	<input type="text" name="locatie" id="locatie">
    <label for="societatea">Societatea</label>
	<input type="text" name="societatea" id="societatea">
  	<label for="dataa2">Data Sesizari</label>
	<input type="text" name="dataa2" id="dataa2">
  	<label for="ora1">Ora Sesizari</label>
	<input type="text" name="ora" id="ora">
  	<label for="dataa">Data Interventiei</label>
	<input type="text" name="dataa" id="dataa">
  	<label for="timpul">Timpul de Interventie</label>
	<input type="text" name="timpul" id="timplu">
  	<label for="diagnosticare">Timpul de diagnosticare</label>
	<input type="text" name="diagnosticare" id="diagnosticare">
  	<label for="timpul2">timpul de interventie previzionat</label>
	<input type="text" name="timpul2" id="timpul2">
	<label for="observatii">Observatii</label>
	<input type="text" name="observatii" id="observatii">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">inapoi la pagina principala</a>

<?php include "templates/footer.php"; ?>
