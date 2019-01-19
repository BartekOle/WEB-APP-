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
	
	<h4>Testy metody sprawdzDane():</h4> 
	<form method = "post" action = "testsprawdzhistoria.php">
    <div><label><span>Login: </span>
				<input type = "text" name = "login" maxlength = "255" value = "Barttt97"  readonly />
				</label></div>
				<br/>
				<p>
				<input type="submit" name = "submit"  value="Dalej"  /> 
				</p>
  </form>
	</div>
  
  <form method = "post" action = "testsprawdzhistoria.php">
    <div><label><span>Login: </span>
				<input type = "text" name = "login" maxlength = "255" value = "Login5"  readonly />
				</label></div>
				<br/>
				<p>
				<input type="submit" name = "submit"  value="Dalej"  /> 
				</p>
  </form>
	</div>
    <form method = "post" action = "testsprawdzhistoria.php">
    <div><label><span>Login: </span>
				<input type = "text" name = "login" maxlength = "255" value = "TEST"  readonly />
				</label></div>
				<br/>
				<p>
				<input type="submit" name = "submit"  value="Dalej"  /> 
				</p>
  </form>
	</div>
  
    <input type="button" onclick="index.html" value="Powrot"  />
	
	</body>
</html>