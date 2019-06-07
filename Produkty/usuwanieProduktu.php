<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>Zarzadzanie produktami</title>
		<meta name = "leywords" content = "strona internetowa, zarzadzanie, produkty">
		<link rel="stylesheet" type="text/css" href="styl1.css" />
		<link rel="stylesheet" type="text/css" href="styl3.css" />
	</head>
	<body>
	<h1>Zarzadzanie produktami</h1>	
	<?php
	$ID = $_POST['produkt'];
	$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"fabryka");
$sql = "DELETE FROM produkt WHERE IdProdukt = $ID ";
if ($conn->query($sql) === TRUE) {
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "DELETE FROM jezykpolski WHERE Id = $ID ";
	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
$sql = "DELETE FROM jezykangielski WHERE Id = $ID ";
	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
$sql = "DELETE FROM jezykhiszpanski WHERE Id = $ID ";
	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
echo "<button onclick=\"location.href='index.html';\" value = \"usunieto\" id = \"poprawne\">Usunieto produkt</button>";
session_destroy(); 
?>

	
	</body>
</html>