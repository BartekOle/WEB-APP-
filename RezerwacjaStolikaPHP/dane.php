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
	
	<h4>Podaj dane osobowe:</h4> 
	<form method = "post" action = "sprawdzdane.php">
    <div><label><span>Imie: </span>
				<input type = "text" name = "imie" maxlength = "255"  autofocus />
				</label></div>
				<br/>
				<div><label><span>Nazwisko: </span>
				<input type = "text" name = "nazwisko" maxlength = "255" />
				</label></div>
				<br/>
				<div><label><span>Email: </span>
				<input type = "text" name = "email" maxlength = "255" />
				</label></div>
				<br/>
				<div><label><span>Wiek: </span>
				<input type = "number" name = "wiek" size = "10" maxlength = "10"/>
				</label></div>
				<br/>
				<div><label><span>Adres: </span>
				<input type = "text" name = "adres" maxlength = "255"  autofocus />
				</label></div>
				<p>
				<input type="submit" name = "submit"  value="Dalej" id = "dal" /> 
				</p>
  </form>
	</div>
  
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	</body>
</html>