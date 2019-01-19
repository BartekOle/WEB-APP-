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
		<title>Japonia - Strona startowa</title>
		<meta name = "leywords" content = "strona internetowa, japonia, miasta, formularz, tokio, kioto, menu, start">
		<meta name = "description" content = " Strona startowa o Japonii z menu rozwijalnym, gdzie możemy wybrać pod stronę nas interesującą.">
		<link rel="stylesheet" type="text/css" href="style/style4.css" />
	<link rel="stylesheet" type="text/css" href="style/style6.css" />

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

</body >
</html>