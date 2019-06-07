<?php
session_start();

if(isset($_POST['submit']))
   {
	$_SESSION['IdProdukt'] = $_POST["produkt"];
   }
   $nazwa;
   $opis;
   $name;
   $description;
   $nombre;
   $descripcion;
   $cena;
   $stan;
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
							  INNER JOIN jezykhiszpanski ON  produkt.IdProdukt = jezykhiszpanski.Id where produkt.IdProdukt = "'.$_SESSION['IdProdukt'].'"';
						 $result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$nazwa = $row["Nazwa"];
								$opis = $row["Opis"];
								$name = $row["Name"];
								$description = $row["Description"];
								$nombre = $row["Nombre"];
								$descripcion = $row["Descripcion"];
								$cena = $row["Cena"];
								$stan = $row["StanMagazynowy"];
							}
						 }else {
							echo "Brak produktu";
						 }
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
	
	<h4>Edytuj Produkt:</h4> 
	<div><form method = "post" action = "sprawdzdedytowanie.php">
	<?php
    echo "<label><span>Nazwa: </span>
				<input type = \"text\" name = \"Nazwa\" maxlength = \"100\" value = \"$nazwa\"  autofocus />
				</label></div>
				<br/>
				<div><label><span>Opis: </span>
				<input type = \"text\" name = \"Opis\" maxlength = \"255\" value = \"$opis\"/>
				</label></div>
				<br/>
				<div><label><span>Name: </span>
				<input type = \"text\" name = \"Name\" maxlength = \"100\"  value = \"$name\" />
				</label></div>
				<br/>
				<div><label><span>Description: </span>
				<input type = \"text\" name = \"Description\" maxlength = \"255\" value = \"$description\"/>
				</label></div>
				<br/>
				<div><label><span>Nombre: </span>
				<input type = \"text\" name = \"Nombre\" maxlength = \"100\"  value = \"$nombre\" />
				</label></div>
				<br/>
				<div><label><span>Descripción: </span>
				<input type = \"text\" name = \"Descripcion\" maxlength = \"255\" value = \"$descripcion\"/>
				</label></div>
				<br/>
				<div><label><span>Cena: </span>
				<input type = \"number\" name = \"Cena\" step=\"0.01\" min=\"0\" value = \"$cena\" required/>
				</label></div>
				<br/>
				<div><label><span>Stan Magazynowy: </span>
				<input type = \"number\" name = \"StanMagazynowy\" min=\"0\" value = \"$stan\" required/>
				</label></div>
				<p>
				<input type=\"submit\" name = \"submit\"  value=\"Dalej\" id = \"dal\" /> 
				</p>"
				?>
  </form>
	</div>
  
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	</body>
</html> 