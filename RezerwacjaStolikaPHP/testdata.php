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
	<form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-21"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "16:01"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "16:02"  readonly />
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
	<form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-18"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "22:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "22:02"  readonly />
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
<form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-25"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "14:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "14:30"  readonly />
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
<form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-21"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "16:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "22:02"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>  
	<form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-17"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "22:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "22:02"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
  <form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-25"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "10:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "11:30"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
  <form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-20"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "12:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "12:00"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
  <form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-20"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "12:00"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
   <form method = "post" action = "testsprawdzdata.php">
		<div ><label><span>Data: </span>
		
				<input type = "date" name = "data" size = "30" value = "2019-01-25"  readonly  />
				</label></div>
				<br/>
		<div ><label><span>Godzina Rozpoczecia: </span>
		
				<input type = "time" name = "rozpoczecie" size = "30" value = "09:00"  readonly  />
				</label></div>
				<br/>
				<div><label><span>Godzina Zakonczenia: </span>
				<input type = "time" name = "zakonczenie" size = "25" value = "11:31"  readonly/>
				</label></div>
	<p>
	<input type="submit" name = "submit"  value="Dalej"  /> 
	</p>
  </form>
    <input type="button" onclick="index.html" value="Powrot"  />
	
	</body>
</html>