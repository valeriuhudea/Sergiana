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
	<input type="text" name="locatie" id="locatie">
  <label for="data">Data Sesizari</label>
	<input type="text" name="data" id="data">
  <label for="ora1">Ora Sesizari</label>
	<input type="text" name="ora" id="ora">
  <label for="data">Data Interventiei</label>
	<input type="text" name="data" id="data">
  <label for="timpul">Timpul de Interventie</label>
	<input type="text" name="timpul" id="timplu">
  <label for="diagnosticare">Timpul de diagnosticare</label>
  <label for="timpul2">timpul de interventie previzionat</label>
	<input type="text" name="timpul2" id="timpul2">
	<label for="observatii">Observatii</label>
	<input type="text" name="location" id="location">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">inapoi la pagina principala</a>

<?php include "templates/footer.php"; ?>
