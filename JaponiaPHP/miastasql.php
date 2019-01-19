<?php

if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>Test MySQL</title>
		<meta name = "leywords" content = "strona internetowa, formularz, osobowy, imie, nazwisko. miesiac urodzenia, email, telefon, nazwau, haslo">
		<meta name = "description" content = "Testuje baze danych Japonia">
		<link rel="stylesheet" type="text/css" href="style/style6.css" />
		<link rel="stylesheet" type="text/css" href="style/style4.css" />
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	</head>
	<body>
	<ol id="menu">
    <li class="dol"><a >Informacje</a>
      <ul>
        <li><a href="Strona.php">Japonia</a></li>

        <li class="prawo"><a href="#">Miasta</a>
          <ol>
            <li><a href="strona4.php">Tokio</a></li>
          </ol>
        </li>

      </ul>
    </li>

    <li class="dol"><a>Formularze</a>
      <ul>
        <li><a href="strona3.php">Formularz dodatkowy</a></li>
      </ul>
    </li>
	<li class="dol"><a>Artykuły</a>
      <ul>
        <li><a href="strona5.php">Tokio najbardziej innowacyjnym miastem na świecie</a></li>
      </ul>
    </li>
	<li class="dol"><a>Inne</a>
      <ul>
        <li><a href="logout.php">Wyloguj</a></li>
		<li><a href="mailto:dios1415@gmail.com">Kontakt</a></li>
      </ul>
    </li>
  </ol>
  <br/>
  <br/>
  <h3>
			<?php
				 $servername = "localhost";
				$username = "root";
				$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
				mysqli_select_db($conn,"Japonia");
				 $nazwam = $_POST["nazwam"];
				 
				 if($nazwam === "All")
				 {
					 
						 $sql = 'SELECT * FROM Miasta';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "Nazwa: " . $row["Nazwa"]. " Wyspa: " . $row["Wyspa"]. " Region: " . $row["Region"]. " Prefektura: " . $row["Prefektura"]. " Burmistrz: " . $row["Burmistrz"]. " Powierzchnia: " . $row["Powierzchnia"]. "km^2  Ludnosc: " . $row["Ludnosc"]. " Kod Pocztowy: " . $row["KodPocztowy"]. " Symbol Kwiatu: " . $row["SymbolKwiatu"]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 
				 }
				else
					 {
						 $sql = 'SELECT * FROM Miasta where Nazwa = "'.$nazwam.'"';
						 $result = mysqli_query($conn, $sql);

						 if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
							   echo "Nazwa: " . $row["Nazwa"]. " Wyspa: " . $row["Wyspa"]. " Region: " . $row["Region"]. " Prefektura: " . $row["Prefektura"]. " Burmistrz: " . $row["Burmistrz"]. " Powierzchnia: " . $row["Powierzchnia"]. "km^2  Ludnosc: " . $row["Ludnosc"]. " Kod Pocztowy: " . $row["KodPocztowy"]. " Symbol Kwiatu: " . $row["SymbolKwiatu"]. "<br>";
							}
						 } else {
							echo "0 wynikow";
						 }
					 }
				 
				 
				
				 mysqli_close($conn);
			  ?>
		<button onclick="history.go(-1);">Powrot </button>
			<footer>
</h3>
<hr />

<ul>

<li >

<strong>Autor:</strong> Bartłomiej Olejniczak <strong>||  <a href="mailto:dios1415@gmail.com">Kontakt-Mail</a>



</ul>

<hr />

</footer>
	</body>
</html>