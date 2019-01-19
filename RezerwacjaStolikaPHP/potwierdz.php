<?php
session_start();
$_SESSION['sprawdzpowod'] = 0;
if(isset($_POST['submit']) && !empty($_POST["powod"]))
   {
	$_SESSION['mail'] = $_POST["powod"];
	$_SESSION['sprawdzpowod'] = 1;
   }
?>

<!DOCTYPE html>
<html lang = "PL">
	<head>
		<meta charset = "utf-8">
		<title>E-RezStolik</title>
		<meta name = "leywords" content = "strona internetowa, rezerwacja, restauracja, stolik">
		<link rel="stylesheet" type="text/css" href="styl1.css" />
	<style>
			#potw
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
			padding: 48px 150px;
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
			padding: 48px 150px;
			text-align: center;
			font-size: 14px;
			font-weight: bold;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			
		   }
		   
	</style> 
	</head>
	<body>
	<h1>E-RezStolik</h1>
	 <center><input type="button"  value="Czy potwierdzasz rezygnacje?" id = "potw" />
	 <br/>
	 <form method = "post" action = "sprawdz.php">
    <?php 
	
		echo "<input type=\"submit\" name = \"submit\" value = \"Potwierdz\" id = \"wyb\" />"; 
		echo "<input type=\"submit\" name = \"submit2\" value = \"Anuluj\" id = \"wyb1\"/>"; 
	?>
	</form>
	</center>
	
	</body>
</html>