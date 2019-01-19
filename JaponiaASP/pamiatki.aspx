<%@ Page Language="VB" AutoEventWireup="false" CodeFile="pamiatki.aspx.vb" Inherits="_Default" %>

<!DOCTYPE html>
<html lang = "PL">
	<head runat="server">
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

		<details>
			<summary>Zamawianie produktow</summary>
			<form id="form1" runat="server">
            
            <p><span class ="tytul">Wybierz kategorie produktu:</span><br/>
                <asp:RadioButtonList ID="kategorie" runat="server" AutoPostBack="True" >
                        <asp:ListItem Value = "Pocztowka">Pocztowka</asp:ListItem>
                        <asp:ListItem Value = "Breloczek">Breloczek</asp:ListItem>
                        <asp:ListItem Value = "Magnez">Magnez</asp:ListItem>
                    </asp:RadioButtonList>
                   </p>
                       <p><span class ="tytul">Wybierz produkt:</span>
                       <asp:CheckBoxList ID="Pocztowka" runat="server" Visible="false">
                           <asp:ListItem Value = "Pocztowka A5 - Tokio">A5 - Tokio - 15 zl</asp:ListItem>
                           <asp:ListItem  Value = "Pocztowka A5 - Kioto">A5 - Kioto - 17 zl</asp:ListItem>
                           <asp:ListItem  Value = "Pocztowka A5 - Osaka">A5 - Osaka - 20 zl</asp:ListItem>
                           <asp:ListItem  Value = "Pocztowka A4 - Gora Fuji">A4 - Gora Fuji - 40 zl</asp:ListItem>
                           <asp:ListItem Value = "Pocztowka A4 - Akihabara">A4 - Akihabara - 30 zl</asp:ListItem>
                           </asp:CheckBoxList>
                            <asp:CheckBoxList ID="Breloczek" runat="server" Visible="false">
                           <asp:ListItem Value = "Breloczek Flaga Japonii">Flaga Japonii - 10 zl</asp:ListItem>
                           <asp:ListItem  Value = "Breloczek Panorama Tokio">Panorama Tokio - 30 zl</asp:ListItem>
                           <asp:ListItem  Value = "Breloczek Gora Fuji">Gora Fuji - 20 zl</asp:ListItem>
                           <asp:ListItem  Value = "Breloczek Panorama Kioto">Panorama Kioto - 40 zl</asp:ListItem>
                           <asp:ListItem Value = "Breloczek Panorama Osaki">Panorama Osaki - 45 zl</asp:ListItem>
                           </asp:CheckBoxList>
                           <asp:CheckBoxList ID="Magnez" runat="server" Visible="false">
                           <asp:ListItem Value = "Magnez Herb Japonii">Herb Japonii - 15 zl</asp:ListItem>
                           <asp:ListItem  Value = "Magnez Panorama Jokohamy">Panorama Jokohamy - 40 zl</asp:ListItem>
                           <asp:ListItem  Value = "Magnez Panorama Akihabary">Panorama Akihabary - 27 zl</asp:ListItem>
                           <asp:ListItem  Value = "Magnez Panorama Sapporo">Panorama Sapporo - 55 zl</asp:ListItem>
                           <asp:ListItem Value = "Magnez Panorama Kobe">Panorama Kobe - 75 zl</asp:ListItem>
                           </asp:CheckBoxList>
                
                   </p>
				<p>
					<asp:Button ID="submitButton" runat="server" Text="Dodaj do koszyka" />
				</p>

                 <p>
            <span class ="tytul"><asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label></span>
            <br/>
            <asp:HyperLink ID="podsumowanie" runat="server" 
          NavigateUrl="~/podsumowanie.aspx" Visible = "false">Kliknij tu aby przejsc do podsumowania zadania</asp:HyperLink>
            
        </p>
			</form>
		</details>	
		<a href = "index.aspx"><img src="obrazki/powrot.png"  height="300" width="300"  alt="Powrot do menu"  /></a>
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
