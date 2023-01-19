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

	<h1>Pregled adresa</h1>
	<table border="1" id="tablica">
		<tr>
			<th>Ime</th>
			<th>Adresa</th>
			<th>Grad</th>
			<th>Spol</th>
			<th>Prijatelj</th>
		</tr>
		<?php
			$datoteka = fopen("Adresar.txt", "r");

			if($datoteka)
			{
				// čitanje iz datoteke
				fgets($datoteka);
				while (!feof($datoteka))
				{
					$ime = fgets($datoteka);
					$adresa = fgets($datoteka);
					$grad = fgets($datoteka);
					$spol = fgets($datoteka);
					$prijatelj = fgets($datoteka);

					echo "<tr>";
					echo "<td>$ime</td>";
					echo "<td>$adresa</td>";
					echo "<td>$grad</td>";
					echo "<td>$spol</td>";
					echo "<td>$prijatelj</td>";
					echo "</tr>";
				}
				fclose($datoteka);
			}

		?>
	</table>
	
	<br>
	


</body>
</html>