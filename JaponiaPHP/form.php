<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>Zwrot formularza</title>
		<meta name = "leywords" content = "strona internetowa, formularz, osobowy, imie, nazwisko. miesiac urodzenia, email, telefon">
		<meta name = "description" content = "Zwrot od formularza osobowego dla strony o Japonii. Gdzie podajemy imię, nazwisko, miesiąc urodzenia, email oraz numer telefonu.">
		<link rel="stylesheet" type="text/css" href="style/style6.css" />
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	</head>
	<body>
		<?php
		
			if(!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $_POST["telefon"]))
				{
					print( "<p> Źle podany numer telefonu</p>
					<p>Numer powinnien mieć wzór (555) 555-5555</p>
					<p>Cofnij strone i popraw numer</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
				}
			else if(strlen($_POST["imie"]) > 30)
			{
				print( "<p> Zbyt długie imię</p>
					<p>Imię może mieć maksymalnie 30 znaków</p>
					<p>Cofnij strone i popraw długość imienia</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(strlen($_POST["nazwau"]) > 30)
			{
				print( "<p> Zbyt długa nazwa uzytkownika</p>
					<p>Nazwa uzytkownika może mieć maksymalnie 30 znaków</p>
					<p>Cofnij strone i popraw długość nazwy uzytkownika</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(strlen($_POST["haslo"]) > 20)
			{
				print( "<p> Zbyt długie haslo</p>
					<p>Haslo może mieć maksymalnie 20 znaków</p>
					<p>Cofnij strone i popraw długość hasla</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(strlen($_POST["haslo"]) < 6)
			{
				print( "<p> Zbyt krotkie haslo</p>
					<p>Haslo musi miec przynajmniej 6 znakow</p>
					<p>Cofnij strone i popraw długość hasla</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(strlen($_POST["nazwisko"]) > 30)
			{
				print( "<p> Zbyt długie nazwisko</p>
					<p>Nazwisko może mieć maksymalnie 30 znaków</p>
					<p>Cofnij strone i popraw długość nazwiska</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(empty($_POST["nazwau"]))
			{
				print( "<p> Nie podałeś Nazwy użytkownika</p>
					<p>Nazwa użytkownika jest obowiązkowy do wypełnnienia</p>
					<p>Cofnij strone i dopisz nazwę użytkownika</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(empty($_POST["haslo"]))
			{
				print( "<p> Nie podałeś hasla</p>
					<p>Haslo jest obowiązkowe do wypełnnienia</p>
					<p>Cofnij strone i dopisz haslol</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(empty($_POST["email"]))
			{
				print( "<p> Nie podałeś emaila</p>
					<p>Email jest obowiązkowy do wypełnnienia</p>
					<p>Cofnij strone i dopisz email</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(substr_count($_POST["email"], '@') != 1)
			{
				print( "<p> Źle podany email</p>
					<p>Email musi zawierać @</p>
					<p>Cofnij strone i popraw email</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
			else if(empty($_POST["lubi"]))
			{
				print( "<p> Nie zaznaczyłeś żadnej opcji w ulubionych rzeczach w Japonii</p>
					<p>Musisz wybrać choć jedną opcje</p>
					<p>Cofnij strone i zaznacz coś</p>
					</body></html>");
					echo "<button onclick=\"history.go(-1);\">Powrot </button>";
					die();
			}
				?>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 

				$sql = "CREATE DATABASE Japonia";
				if ($conn->query($sql) === TRUE) {
				echo "Utworzono baze danych Japonia";
				echo "<br>";
				} else {
				echo "<br>";
				}

				mysqli_select_db($conn,"Japonia");

				$sql = "CREATE TABLE Uzytkownik (
				NazwaU VARCHAR(30) NOT NULL PRIMARY KEY,
				Haslo VARCHAR(20) NOT NULL,
				Imie VARCHAR(30),
				Nazwisko VARCHAR(20),
				MiesiacU VARCHAR(15),
				Email VARCHAR(1000),
				Telefon VARCHAR(20),
				CoLubi VARCHAR(200)
				)";

				if ($conn->query($sql) === TRUE) {
					echo "Utworzono tabele Uzytkownik";
					echo "<br>"; 
				} else {
					echo "<br>"; 
				}
				
				$nazwau = $_POST["nazwau"];
				$haslo = $_POST["haslo"];
				$imie = $_POST["imie"];
				$nazwisko = $_POST["nazwisko"];
				$miesiacu = $_POST["miesiac"];
				$email = $_POST["email"];
				$telefon = $_POST["telefon"];
				$colubi = implode(", ", $_POST["lubi"]);
				$sql = "INSERT INTO Uzytkownik (NazwaU, Haslo, Imie, Nazwisko, MiesiacU, Email, Telefon, CoLubi)
				VALUES ('$nazwau', '$haslo', '$imie', '$nazwisko', '$miesiacu', '$email', '$telefon', '$colubi')";

				if ($conn->query($sql) === TRUE) {
					echo "Dodano nowy rekord do bazwy skladajacy sie z: ";
					echo "<br>"; 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			?>
			<p><strong> Nazwa użytkownika: </strong> <?php print($nazwau); ?></p>
			<p><strong> Haslo: </strong> <?php print($haslo); ?></p>
			<p><strong> Imię: </strong> <?php print($imie); ?></p>
			<p><strong> Nazwisko: </strong> <?php print($nazwisko); ?></p>
			<p><strong> Miesiąc urodzenia: </strong> <?php print($miesiacu); ?></p>
			<p><strong> Email: </strong> <?php print($email); ?></p>
			<p><strong> Numer Telefonu: </strong> <?php print($telefon); ?></p>
			<p><strong> Ulubione rzeczy w Japonii </strong> <?php 
			if(in_array("Jezyk", $_POST["lubi"])){
			print("<p>Jezyk</p>");
			}
			if(in_array("Jedzenie", $_POST["lubi"])){
			print("<p>Jedzenie</p>");
			}
			if(in_array("Kulture", $_POST["lubi"])){
			print("<p>Kulture</p>");
			}
			if(in_array("Krajobraz", $_POST["lubi"])){
			print("<p>Krajobraz</p>");
			}
			if(in_array("Ludzi", $_POST["lubi"])){
			print("<p>Ludzi</p>");
			}
			?>
			<button onclick="history.go(-1);">Powrot </button>
	</body>
</html>