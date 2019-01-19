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
		<link rel="stylesheet" type="text/css" href="styl2.css" /> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	<h4>Historia Rezerwacji:</h4>
		<form method = "post" action = "opis.php">
			<?php
			$login = $_POST["login"];
			$index = 1;
			$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");

$sql = "UPDATE rezerwacja SET Przedawniona=1 WHERE CURDATE() >= DataRezerwacji AND CURRENT_TIME() > GodzinaZakonczenia ";
mysqli_query($conn, $sql);


						 
	$sql = 'SELECT * FROM klient where Login = '.$login.'';
	echo $sql;
						 $result = mysqli_query($conn, $sql);
						 echo $result;
							$index = mysqli_num_rows($result);
						 if (mysqli_num_rows($result) > 0) {
							$sql = 'SELECT * FROM rezerwacja where KlientLogin = '.$login.' ORDER BY DataRezerwacji DESC';
						 $result = mysqli_query($conn, $sql);
							$index = mysqli_num_rows($result);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo '<input type="radio" name="group2" value="'.$row["ID"].'" checked/> Rezerwacja #'. $index  ;
							   echo '<br/><br/>';
							   $index = $index-1;
							}
						 } else {
							echo "Brak rezerwacji";
						 }
							}
						  else {
							echo "Brak takiego uzytkownika";
						 }
			
			?>
			
		</form>
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	
	</body>
</html>