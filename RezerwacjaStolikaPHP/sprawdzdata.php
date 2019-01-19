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

$brakbledu = 1;

if(empty($_POST["data"]) || empty($_POST["rozpoczecie"]) || empty($_POST["zakonczenie"]))
			{
				$brakbledu = 0;
			}
else if(date_create(date("Y-m-d"))  >= date_create($_POST["data"]))
			{
				$brakbledu = 0;
			}

else if($_POST["rozpoczecie"] >= $_POST["zakonczenie"])
			{
				$brakbledu = 0;

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
			
$sql = 'SELECT * FROM rezerwacja where Przedawniona = 0 AND Zrezygnowane = 0 ORDER BY DataRezerwacji';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   if(date_create($_POST["data"]) == date_create($row["DataRezerwacji"]))
							   {
								if($_POST["rozpoczecie"] < $row["GodzinaRozpoczecia"])
								{
									if($_POST["zakonczenie"] <= $row["GodzinaRozpoczecia"])
									{
										
									}
									else
									{
										$brakbledu = 0;
									}
								}
								else if($_POST["rozpoczecie"] >= $row["GodzinaZakonczenia"])
								{
										
									
								}
								else
								{
									$brakbledu = 0;
								}
								}
							}
						 }
}
if($brakbledu == 0)
{
	echo "<button onclick=\"history.go(-1);\" value = \"Termin jest juz zajety lub bledny\" id = \"blad\">Termin jest juz zajety lub bledny </button>";
}
else
{
	echo "<button onclick=\"location.href='dane.php';\" value = \"Poprawny wybor terminu\" id = \"poprawne\">Poprawny wybor terminu </button>";
	$_SESSION['data'] = $_POST["data"];
	$_SESSION['rozpoczecie'] = $_POST["rozpoczecie"];
	$_SESSION['zakonczenie'] = $_POST["zakonczenie"];
}
?>

	
	</body>
</html>