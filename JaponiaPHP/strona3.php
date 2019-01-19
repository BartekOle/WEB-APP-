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
		<title>Japonia - Formularz dodatkowy</title>
		<meta name = "leywords" content = "strona internetowa, formularz, miasto zamieszkania, ulubiony kolor, rok i miesiac urodzenia, ocena, ulubiona, wyszukiwanie">
		<meta name = "description" content = " Formularz dodatkowy przeznaczony dla użytkowników strony o Japonii. Uzupełnić w nim można w jakim mieście mieszkamy, jaki jest nasz ulubiony kolor, rok i miesiąc urodzenia. Możemy coś wyszukać oraz cenić stronę oraz podać swoją ulubioną stronę internetową.">
		<link rel="stylesheet" type="text/css" href="style/style3.css" />
		<link rel="stylesheet" type="text/css" href="style/style6.css" />
		<link rel="stylesheet" type="text/css" href="style/style4.css" />
		<script type="text/javascript" src="javascript/javascript2.js" ></script>

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
	
		<details>
			<summary>Formularz dodatkowy</summary>
			<form method = "post" autocomplete = "on" id = "myForm">
				<p><label><span class ="tytul">Miasto zamieszkania:</span><br/>
				<input type = "text" id = "imie" size = "25" maxlength = "30" 
					placeholder = "Wpisz miejsce zamieszkania" />
				</label></p>
				<p><label><span class ="tytul">Ulubiony kolor:</span><br/>
				<input type = "color" id = "kolor"  />
				</label></p>
				<p><label><span class ="tytul">Rok i miesiac urodzenia:</span><br/>
				<input type = "month" id = "rokimiesiac" />
				</label></p>
				<p><label><span class ="tytul">W ilu procentach podoba ci się strona:</span><br/>
				0%<input type = "range" id = "podoba"
					min = "0"
					max = "100"
					value = "50" />100%
				</label></p>
				<p><label><span class ="tytul">Czego szukasz?</span><br/>
				<input type = "search" id = "szukanie"
				placeholder = "Wpisz wyszukiwaną frazę" />
				</label></p>
				<p><label><span class ="tytul">Twoja ulubiona strona internetowa? </span><br/>
				<input type = "url" id = "strona"
				placeholder = "http://www.zzz.com" />
				</label></p>
				<p>
					<input id = "submit" type = "submit"  value = "Submit">
					<input id = "reset" type = "reset"  value = "Clear">
				</p>
			</form>
		<p id = "helpText"></p>
		</details>	
		<a href = "index.php"><img src="obrazki/powrot.png"  height="300" width="300"  alt="Powrot do menu"  /></a>
		<footer>
		<hr />
		<ul>
			<li >
			<strong>Autor:</strong> Bartłomiej Olejniczak <strong>||</strong>
			<a href="mailto:dios1415@gmail.com">Kontakt-Mail</a>
		</ul>
		<hr />
		</footer>
	</body>
</html>