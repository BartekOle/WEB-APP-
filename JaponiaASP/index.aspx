<%@ Page Language="VB" AutoEventWireup="false" CodeFile="index.aspx.vb" Inherits="Default2" %>

<html lang = "PL">
	<head runat="server">
		<meta charset = "utf-8">
		<title>Japonia - Strona startowa</title>
		<meta name = "leywords" content = "strona internetowa, japonia, miasta, formularz, tokio, kioto, menu, start">
		<meta name = "description" content = " Strona startowa o Japonii z menu rozwijalnym, gdzie możemy wybrać pod stronę nas interesującą.">
		<link rel="stylesheet" type="text/css" href="styles/style4.css" />
	<link rel="stylesheet" type="text/css" href="styles/style6.css" />

  </head>

<body>

  <ol id="menu">
    <li class="dol"><a >Informacje</a>
      <ul>
        <li><a href="Strona.aspx">Japonia</a></li>

        <li class="prawo"><a href="#">Miasta</a>
          <ol>
            <li><a href="strona4.aspx">Tokio</a></li>
          </ol>
        </li>

      </ul>
    </li>

    <li class="dol"><a>Formularze</a>
      <ul>
        <li><a href="strona3.aspx">Formularz dodatkowy</a></li>
      </ul>
    </li>
	<li class="dol"><a>Artykuły</a>
      <ul>
        <li><a href="strona5.aspx">Tokio najbardziej innowacyjnym miastem na świecie</a></li>
      </ul>
    </li>
	<li class="dol"><a>Inne</a>
      <ul>
        <li><a href="pamiatki.aspx">Pamiatki</a></li>
        <li><a href="">Wyloguj</a></li>
		<li><a href="mailto:dios1415@gmail.com">Kontakt</a></li>
      </ul>
    </li>
  </ol>

</body >
</html>