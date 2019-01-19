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
	<style>
			#pow
		   {
			background-color: #6200ee;
			border: none;
			color: white;
			padding: 97px 268px;
			text-align: center;
			font-size: 14px;
			font-weight: bold;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			
		   }
		   #wyb
		   {
			background-color: white;
			border: none;
			color: black;
			padding: 48px 165px;
			text-align: center;
			font-size: 14px;
			font-weight: bold;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			
		   }
		    #wyb1
		   {
			background-color: white;
			border: none;
			color: black;
			padding: 48px 165px;
			text-align: center;
			font-size: 14px;
			font-weight: bold;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			
		   }
		 
			
	</style> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	 <center><input type="button"  value="Czy chcesz podac powod?" id = "pow" />
	 <br/>
	<form method = "post" action = "potwierdz.php">
    <?php 
	
		echo "<input type=\"submit\" name = \"submit\" value = \"Tak\" id = \"wyb\"/>"; 
		echo "<input type=\"submit\" name = \"submit2\" value = \"Nie\" id = \"wyb1\"/>"; 
		echo "<br/>";
		echo "<input type = \"text\" name = \"powod\" size = \"96\"  placeholder = \"Wpisz powod rezygnacji\" />";
	?>
	</form></center>
	</body>
</html>