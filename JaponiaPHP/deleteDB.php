<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>Usuniecie bazydanych</title>
		<meta name = "leywords" content = "strona internetowa, formularz, osobowy, imie, nazwisko. miesiac urodzenia, email, telefon, nazwau, haslo, usuniecie">
		<meta name = "description" content = "Usuwa baze danych Japonia">
		<link rel="stylesheet" type="text/css" href="style/style6.css" />
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	</head>
	<body>
	
			<?php
				 $servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
				 $sql = "DROP DATABASE Japonia";
				 
				 if (mysqli_query($conn, $sql)) {
				 echo "Udalo sie usunac baze danych Japonia";
				 } else {
					echo "Wystapil blad podczas usuwania bazdy danych Japonia: " . mysqli_error($conn);
				 }
				 mysqli_close($conn);
			  ?>
		
			
	</body>
</html>