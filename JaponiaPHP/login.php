<?php
//login.php


$servername = "localhost";
$username = "root";
$password = "pass";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error) {
				die("Nie udało się połączyć: " . $conn->connect_error);
				} 
				
mysqli_select_db($conn,"Japonia");

if(isset($_COOKIE["type"]))
{
 header("location:index.php");
}



$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["nazwau"]) || empty($_POST["haslo"]))
 {
  $message = "<div class='alert alert-danger'>Oba pola sa wymagane</div>";
 }
 else
 {
  $sql = '
  SELECT * FROM Uzytkownik
  where NazwaU = "'.$_POST["nazwau"].'"';
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0)
  {
	  $sql = '
  SELECT * FROM Uzytkownik
  where NazwaU = "'.$_POST["nazwau"].'"
  AND Haslo = "'.$_POST["haslo"].'"';
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0)
    {
     setcookie("type", time()+3600);
     header("location:index.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Zle haslo</div>';
    }
							}
     else
	 {
		  $message = '<div class="alert alert-danger">Zla nazwa uzytkownika</div>';
	 }
    
   
  }
}
  
 



?>

<!DOCTYPE html>
<html lang = "PL">
 <head>
 <meta charset = "utf-8">
  <title>Logowanie</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="style/style6.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Logowanie</h2>
   <br />
   <div class="panel panel-default">

    <div class="panel-heading">Logowanie</div>
    <div class="panel-body">
     <span><?php echo $message; ?></span>
     <form method="post">
      <div class="form-group">
       <label>Nazwa uztkownika</label>
       <input type="text" name="nazwau" id="nazwau" class="form-control" />
      </div>
      <div class="form-group">
       <label>Haslo</label>
       <input type="password" name="haslo" id="haslo" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
   <br />
  </div>
  <footer>

<hr />

<ul>

<li >

<strong>Autor:</strong> Bartłomiej Olejniczak || <a href="mailto:dios1415@gmail.com">Kontakt-Mail</a> ||  <a href="strona2.html">Rejestracja</a>



</ul>

<hr />

</footer>
 </body>
</html>