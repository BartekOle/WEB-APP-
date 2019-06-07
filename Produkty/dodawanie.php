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
	
	<h4>Dodawanie produktu:</h4> 
	<div><form method = "post" action = "sprawdzdodawanie.php">
    <label><span>Nazwa: </span>
				<input type = "text" name = "Nazwa" maxlength = "100"  autofocus />
				</label></div>
				<br/>
				<div><label><span>Opis: </span>
				<input type = "text" name = "Opis" maxlength = "255" />
				</label></div>
				<br/>
				<div><label><span>Name: </span>
				<input type = "text" name = "Name" maxlength = "100"   />
				</label></div>
				<br/>
				<div><label><span>Description: </span>
				<input type = "text" name = "Description" maxlength = "255" />
				</label></div>
				<br/>
				<div><label><span>Nombre: </span>
				<input type = "text" name = "Nombre" maxlength = "100"   />
				</label></div>
				<br/>
				<div><label><span>Descripción: </span>
				<input type = "text" name = "Descripcion" maxlength = "255" />
				</label></div>
				<br/>
				<div><label><span>Cena: </span>
				<input type = "number" name = "Cena" step="0.01" min="0" required/>
				</label></div>
				<br/>
				<div><label><span>Stan Magazynowy: </span>
				<input type = "number" name = "StanMagazynowy" min="0" required/>
				</label></div>
				<p>
				<input type="submit" name = "submit"  value="Dalej" id = "dal" /> 
				</p>
  </form>
	</div>
  
    <input type="button" onclick="history.go(-1);" value="Powrot" id = "pow" />
	
	</body>
</html> 