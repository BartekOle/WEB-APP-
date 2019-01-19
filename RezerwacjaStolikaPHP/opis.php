<?php
session_start();

if(isset($_POST['submit']))
   {
	$_SESSION['radio2'] = $_POST["group2"];
   }
   $nrstolika;
   $data;
   $rozpoczecie;
   $zakonczenie;
   $imie;
   $nazwisko;
   $email;
   $wiek;
   $adres;
   $rodzajstolika;
   $przedawniona;
 $servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"rezerwacja");

$sql = 'SELECT * FROM rezerwacja where ID = "'.$_POST["group2"].'"';
						 $result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   $nrstolika = $row["StolikNrStolika"];
							   $data = $row["DataRezerwacji"];
							   $rozpoczecie = $row["GodzinaRozpoczecia"];
							   $zakonczenie = $row["GodzinaZakonczenia"];
							   if($row["Zrezygnowane"] == 1 || $row["Przedawniona"] == 1)
							   {
								   $przedawniona = 1;
							   }
							   else
							   {
								   $przedawniona = 0;
							   }
							}
						 }else {
							echo "Brak rezerwacji";
						 }
						 
$sql = 'SELECT * FROM klient where Login = "Barttt97"';
						 $result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   $imie = $row["Imie"];
							   $nazwisko = $row["Nazwisko"];
							   $email = $row["Email"];
							   $wiek = $row["Wiek"];
							   $adres = $row["Adres"];
							}
						 }else {
							echo "Brak klienta";
						 }
						 
$sql = 'SELECT * FROM stolik where NrStolika = "'.$nrstolika.'"';
						 $result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   $rodzajstolika = $row["Typ"];
							   
							}
						 }else {
							echo "Brak stolika";
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
	<style>
			p.a
			{
			font-size: 16px;
			font-weight: bold;
			}
			p.b
			{
			font-size: 14px;
			}
	</style> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	<p class = "a">Stolik:</p>
	<?php 
	echo "<p class = \"b\">Stolik #" .$nrstolika. " - " .$rodzajstolika. "</p>";
	?>
	<p class = "a">Termin:</p>
	<?php 
	echo "<p class = \"b\">" .$data. " " .$rozpoczecie. "-" .$zakonczenie. "</p>";
	?>
	<p class = "a">Dane kontaktowe:</p>
	<?php 
	echo "<p class = \"b\">" .$imie. " " .$nazwisko. "</p>";
	?>
	<?php 
	echo "<p class = \"b\">" .$email. "</p>";
	?>
	<?php 
	echo "<p class = \"b\">" .$wiek. " lat </p>";
	?>
	<?php 
	echo "<p class = \"b\">" .$adres. "</p>";
	?>
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	<form method = "post" action = "powod.php">
    <?php 
	if($przedawniona == 0)
	{
		echo "<input type=\"submit\" name = \"submit\" value = \"Rezygnuj\" id = \"dal\" />"; 
	}
	?>
	</form>
	
	</body>
</html>