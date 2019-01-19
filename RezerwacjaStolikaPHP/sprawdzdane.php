<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>E-RezStolik</title>
		<meta name = "leywords" content = "strona internetowa, rezerwacja, restauracja, stolik">
		<link rel="stylesheet" type="text/css" href="styl1.css" />
		<link rel="stylesheet" type="text/css" href="styl3.css" />
	<style>
		   #istnieje
		   {
			background-color: #b00020;
			border: none;
			color: white;
			padding: 137px 268px;
			text-align: center;
			font-size: 14px;
			font-weight: bold;
			position: absolute;
			top: 40%;
			left: 30%;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		   }
		  
		




			
	</style> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	
	<?php

$brakbledu = 1;

if(empty($_POST["imie"]) || empty($_POST["nazwisko"]) || empty($_POST["email"]) || empty($_POST["wiek"]) || empty($_POST["adres"]))
			{
				$brakbledu = 0;
				echo "1";
			}
else if(substr_count($_POST["email"], '@') != 1)
			{
				$brakbledu = 0;
				echo "2";
			}
else if($_POST["wiek"] < 12)
			{
				$brakbledu = 0;
				echo "3";
			}
else
{
	$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");
			
$sql = 'SELECT * FROM rezerwacja where KlientLogin = "Barttt97" AND Przedawniona = 0 AND Zrezygnowane = 0 ORDER BY DataRezerwacji';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							$brakbledu = 2;
						 }
}
if($brakbledu == 0)
{
	echo "<button onclick=\"history.go(-1);\" value = \"Blednie podane dane\" id = \"blad\">Blednie podane dane </button>";
}
else if($brakbledu == 2)
{
	echo "<button onclick=\"location.href='index.html';\" value = \"Istnieje juz aktywna rezerwacja\" id = \"istnieje\">Istnieje juz aktywna rezerwacja </button>";
	session_destroy(); 
}
else
{
	echo "<button onclick=\"location.href='index.html';\" value = \"Rezerwacja zostale dokonana\" id = \"poprawne\">Rezerwacja zostale dokonana </button>";
	$dane = $_POST["imie"] . " " . $_POST["nazwisko"] . ", " . $_POST["email"] . ", " . $_POST["wiek"] . "lat, " . $_POST["adres"];
	$data =  $_SESSION['data'];
	$rozpoczecie =  $_SESSION['rozpoczecie'];
	$zakonczenie =  $_SESSION['zakonczenie'];
	$nrstolika =  $_SESSION['radio'];
	$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");
$sql = "INSERT INTO rezerwacja (ID, StolikNrStolika, KlientLogin, DataRezerwacji, GodzinaRozpoczecia, GodzinaZakonczenia, DaneKlienta, Zrezygnowane, Przedawniona)
				VALUES (null, '$nrstolika', 'Barttt97', '$data', '$rozpoczecie', '$zakonczenie', '$dane', 0, 0)";

				if ($conn->query($sql) === TRUE) {
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
session_destroy(); 
}
?>

	
	</body>
</html>