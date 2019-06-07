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
	<style>
		   #samopis
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
	<h1>Zarzadzanie produktami</h1>	
	<?php
$brakbledu = 1;

if(empty($_POST["Nazwa"]) && empty($_POST["Name"]) && empty($_POST["Nombre"]))
			{
				$brakbledu = 0;
			}
else if((empty($_POST["Nazwa"]) && !empty($_POST["Opis"])) ||  (empty($_POST["Name"]) && !empty($_POST["Description"])) || (empty($_POST["Nombre"]) && !empty($_POST["Descripcion"])))
			{
				$brakbledu = 2;
			}

if($brakbledu == 0)
{
	echo "<button onclick=\"location.href='edytowanie.php';\" value = \"Blad\" id = \"blad\">Przynajmniej nazwa w jednym jezyku musi byc podana </button>";
	session_destroy(); 
}
else if($brakbledu == 2)
{
	echo "<button onclick=\"location.href='edytowanie.php';\" value = \"sam opis\" id = \"samopis\">Nie może być podany sam opis bez nazwy </button>";
	session_destroy(); 
}
else
{
	$cena = $_POST["Cena"];
	$stan = $_POST["StanMagazynowy"];
	$ID = $_SESSION['IdProdukt'];
	$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"fabryka");
$sql = "UPDATE produkt SET Cena = $cena, StanMagazynowy = $stan WHERE IdProdukt = $ID ";
if ($conn->query($sql) === TRUE) {
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
	$nazwa = $_POST["Nazwa"];
	$opis = $_POST["Opis"];
$sql = "UPDATE jezykpolski  SET Nazwa = '$nazwa', Opis = '$opis' WHERE Id= $ID ";

	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$name = $_POST["Name"];
	$description = $_POST["Description"];
$sql = "UPDATE jezykangielski  SET Name = '$name', Description = '$description' WHERE Id = $ID ";
	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$nombre = $_POST["Nombre"];
	$descripcion = $_POST["Descripcion"];
$sql = "UPDATE jezykhiszpanski  SET Nombre = '$nombre', Descripcion = '$descripcion' WHERE Id = $ID ";
	if ($conn->query($sql) === TRUE) {
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	echo "<button onclick=\"location.href='index.html';\" value = \"zedytowano\" id = \"poprawne\">Zedytowano produkt</button>";
session_destroy(); 
}
?>

	
	</body>
</html>