<%@ Page Language="VB" AutoEventWireup="false" CodeFile="potwierdzenie.aspx.vb" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html>
<html lang = "PL">
	<head id="Head1" runat="server">
		<meta charset = "utf-8">
		<title>Japonia - Formularz dodatkowy</title>
		<meta name = "leywords" content = "strona internetowa, formularz, miasto zamieszkania, ulubiony kolor, rok i miesiac urodzenia, ocena, ulubiona, wyszukiwanie">
		<meta name = "description" content = " Formularz dodatkowy przeznaczony dla użytkowników strony o Japonii. Uzupełnić w nim można w jakim mieście mieszkamy, jaki jest nasz ulubiony kolor, rok i miesiąc urodzenia. Możemy coś wyszukać oraz cenić stronę oraz podać swoją ulubioną stronę internetową.">
		<link rel="stylesheet" type="text/css" href="styles/style3.css" />
		<link rel="stylesheet" type="text/css" href="styles/style6.css" />
		<link rel="stylesheet" type="text/css" href="styles/style4.css" />
		</script>

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

            <h2>Potwierdzenie: </h2>
			<form id="form1" runat="server">
           <span class ="tytul"><asp:Label ID="outputLabel" runat="server"></asp:Label></span><br/>
            <asp:HyperLink ID="pamiatki" runat="server" 
          NavigateUrl="~/pamiatki.aspx">Kliknij tu aby cofnac sie do wyboru pamiatek</asp:HyperLink>
          <br/>
			</form>
		
	
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



