<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>Test MySQL</title>
		<meta name = "leywords" content = "strona internetowa, formularz, osobowy, imie, nazwisko. miesiac urodzenia, email, telefon, nazwau, haslo">
		<meta name = "description" content = "Testuje baze danych Japonia">
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
				mysqli_select_db($conn,"Japonia");
				 $nazwau = $_POST["nazwau"];
				 $select = $_POST["select"];
				 
				 if($nazwau === "All")
				 {
					 if($select === "Wszystko")
					 {
						 $sql = 'SELECT * FROM Uzytkownik';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "NazwaU: " . $row["NazwaU"]. " Haslo: " . $row["Haslo"]. " Imie: " . $row["Imie"]. " Nazwisko: " . $row["Nazwisko"]. " MiesiacU: " . $row["MiesiacU"]. " Email: " . $row["Email"]. " Telefon: " . $row["Telefon"]. " CoLubi: " . $row["CoLubi"]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 }
					 else
					 {
						 $sql = 'SELECT '.$select.' FROM Uzytkownik';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "$select: "  . $row[$select]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 }
				 }
				 else
				 {
					 if($select === "Wszystko")
					 {
						 $sql = 'SELECT * FROM Uzytkownik where NazwaU = "'.$nazwau.'"';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "NazwaU: " . $row["NazwaU"]. " Haslo: " . $row["Haslo"]. " Imie: " . $row["Imie"]. " Nazwisko: " . $row["Nazwisko"]. " MiesiacU: " . $row["MiesiacU"]. " Email: " . $row["Email"]. " Telefon: " . $row["Telefon"]. " CoLubi: " . $row["CoLubi"]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 }
					 else
					 {
						 $sql = 'SELECT '.$select.' FROM Uzytkownik where NazwaU = "'.$nazwau.'"';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "$select: " . $row[$select]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 }
				 }
				 
				
				 mysqli_close($conn);
			  ?>
		
			
	</body>
</html>