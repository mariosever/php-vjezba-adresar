<!DOCTYPE html>
<html>
<head>
	<title>Adresar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Unos adrese</h1>

	<form method="post" action="SpremiAdresu.php">
		
		Ime:<br>
		<input type="text" name="ime">
		<br><br>

		Adresa:<br>
		<textarea name="adresa"></textarea>
		<br><br>

		Grad:<br>
		<select name="grad">
			<option>Zagreb</option>
			<option>Split</option>
		</select>
		<br><br>

		Spol:<br>
		<input type="radio" name="spol" value="M"> Muški <br>
		<input type="radio" name="spol" value="Ž"> Ženski
		<br><br>

		Prijatelj: <br>
		<input type="checkbox" name="prijatelj" checked="checked"> Dodaj prijatelja
		<br><br>

		<input type="submit" value="Spremi">
		<input type="reset" value="Odustani">

	</form>

	<br>


</body>
</html>