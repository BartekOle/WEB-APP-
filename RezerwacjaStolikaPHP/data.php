<?php
session_start();

if(isset($_POST['submit']))
   {
	$_SESSION['radio'] = $_POST["group1"];
   }
?>

<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>E-RezStolik</title>
		<meta name = "leywords" content = "strona internetowa, rezerwacja, restauracja, stolik">
		<link rel="stylesheet" type="text/css" href="styl1.css" />
		<link rel="stylesheet" type="text/css" href="styl2.css" /> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	
	<h4>Podaj Godziny:</h4> 
	<form method = "post" action = "sprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30"  autofocus />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30"  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" />
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej" id = "dal" /> 
	</p>
  </form>
	
	<h4>Zajete daty:</h4> 
	
	<?php

$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");

$sql = 'UPDATE rezerwacja SET Przedawniona=1 WHERE CURDATE() >= DataRezerwacji AND CURRENT_TIME() > GodzinaZakonczenia';
mysqli_query($conn, $sql);

$sql = 'SELECT * FROM rezerwacja where Przedawniona = 0 AND Zrezygnowane = 0 ORDER BY DataRezerwacji';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo $row["DataRezerwacji"]. " " . $row["GodzinaRozpoczecia"]. "-" . $row["GodzinaZakonczenia"]. "<br><br>";
							}
						 } else {
							echo "Brak rezerwacji";
						 }
?>
	
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	</body>
</html>