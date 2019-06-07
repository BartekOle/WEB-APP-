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
		<link rel="stylesheet" type="text/css" href="styl2.css" /> 
	</head>
	<body>
	<h1>Zarzadzanie produktami</h1>
	<h4>Wybierz produkt do przejrzenia ich danych:</h4>
		<form method = "post" action = "przegladProduktu.php">
			<?php
			$index = 1;
			$servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
mysqli_select_db($conn,"fabryka");

$sql = 'SELECT * FROM produkt INNER JOIN jezykpolski ON produkt.IdProdukt = jezykpolski.Id
							  INNER JOIN jezykangielski ON  produkt.IdProdukt = jezykangielski.Id 
							  INNER JOIN jezykhiszpanski ON  produkt.IdProdukt = jezykhiszpanski.Id ORDER BY IdProdukt DESC';
						 $result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo '<input type="radio" name="produkt" value="'.$row["IdProdukt"].'" checked/> Produkt: '.$row["Nazwa"].' / '.$row["Name"].' / '.$row["Nombre"]  ;
							   echo '<br/><br/>';
							}
						 } else {
							echo "Brak produktow";
						 }
			
			?>
			<p>
			<input type="submit" name = "submit"  value="Dalej" id = "dal" /> 
			</p>
		</form>
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	
	</body>
</html>