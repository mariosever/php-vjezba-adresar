<!DOCTYPE html>
<html>
<head>
	<title>Spremi Adresu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Spremljena adresa</h1>

	<?php

		$ime = $_POST['ime'];
		$adresa = $_POST['adresa'];
		$grad = $_POST['grad'];
		
		// provjeravamo je li postavljen spol
		if( isset($_POST['spol']) )
		{
			if( $_POST['spol'] == "M" )
				$spol = "muški";
			else
				$spol = "ženski";
		}
		else
			$spol = "";

		// provjeravamo je li postavljen prijatelj
		if( isset($_POST['prijatelj']) )
			$prijatelj = "da";
		else
			$prijatelj = "ne";


		echo "Ime: $ime <br>";
		echo "Adresa: $adresa <br>";
		echo "Grad: $grad <br>";
		echo "Spol: $spol <br>";
		echo "Prijatelj: $prijatelj <br>";


		$datoteka = fopen("Adresar.txt", "a");

		fwrite($datoteka, "\n$ime\n$adresa\n$grad\n$spol\n$prijatelj");

		fclose($datoteka);

	?>


</body>
</html>