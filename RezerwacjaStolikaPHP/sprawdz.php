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
	</head>
	<body>
	<h1>E-RezStolik</h1>
	
	<?php
if(isset($_POST['submit']))
   {
	  ini_set('sendmail_from', 'dios1415@gmail.com');
	echo "<button onclick=\"location.href='index.html';\" value = \"Rezygnacja zostala dokonana\" id = \"poprawne\">Rezygnacja zostala dokonana </button>";
	/*if($_SESSION['sprawdzpowod'] == 1)
	{
		echo $_SESSION['mail'];
		mail("dios1415@gmail.com","Powod Rezygnacji",$_SESSION['mail']);
	}*/
	$id = $_SESSION['radio2'];
	$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");

	$sql = 'UPDATE rezerwacja SET Zrezygnowane=1 WHERE ID = "'.$id.'" ';
	mysqli_query($conn, $sql);
	session_destroy(); 
   }

if(isset($_POST['submit2']))
   {
	echo "<button onclick=\"location.href='index.html';\" value = \"Rezygnacja zostala anulowana\" id = \"blad\">Rezygnacja zostala anulowana </button>";
	
	
	session_destroy(); 
   }

?>

	
	</body>
</html>