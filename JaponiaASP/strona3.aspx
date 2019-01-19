<%@ Page Language="VB" AutoEventWireup="false" CodeFile="strona3.aspx.vb" Inherits="strona3" %>

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
			<summary>Formularz dodatkowy</summary>
			<form id="form1" runat="server">
            
            <p><label><span class ="tytul">Imie:</span><br/>
				  <asp:TextBox ID="imie" runat="server"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="nameRequiredFieldValidator" runat="server" 
                        ControlToValidate="imie" Display="Dynamic" 
                        ErrorMessage="Wpisz swoje imie" runat="server"  ForeColor="Red" ></asp:RequiredFieldValidator>
<asp:RegularExpressionValidator Display = "Dynamic" ControlToValidate = "imie" ID="RegularExpressionValidator1" ValidationExpression = "^[\s\S]{0,30}$" runat="server"  ForeColor="Red"  ErrorMessage="Maksymalna dlugosc to 30 znakow"></asp:RegularExpressionValidator>
				</label></p>
				<p><label><span class ="tytul">Data urodzenia:</span><br/>
				  <asp:TextBox ID="data" runat="server"></asp:TextBox>
                  <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" 
                        ControlToValidate="data" runat="server" 
                        ErrorMessage="Podaj date urodzenia" ForeColor="Red"></asp:RequiredFieldValidator>
                   <asp:CompareValidator id="dateValidator" runat="server"  ForeColor="Red" 
                  Type="Date" Operator="DataTypeCheck" ControlToValidate="data"
                  ErrorMessage="Wpisz jako typ date np. 01-12-1997">
                </asp:CompareValidator>
				</label></p>
                <p><label><span class ="tytul">Numer telefonu:</span><br/>
				  <asp:TextBox ID="numer" runat="server"></asp:TextBox>
                 <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server" 
                        ControlToValidate="numer" Display="Dynamic" 
                        ErrorMessage="Wprowadz numer telefonu" ForeColor="Red"></asp:RequiredFieldValidator>
                    <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator" runat="server" 
                        ControlToValidate="numer" Display="Dynamic" 
                        ErrorMessage="Wprowadz poprawny format numeru np. (555) 555-5555" 
                       ForeColor="Red" ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
				</label></p>
				<p><label><span class ="tytul">Ulubiona strona internetowa:</span><br/>
				  <asp:TextBox ID="strona" runat="server"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" 
                        ControlToValidate="strona" runat="server" 
                        ErrorMessage="Podaj strone internetowa" ForeColor="Red"></asp:RequiredFieldValidator>
<asp:RegularExpressionValidator Display = "Dynamic" ControlToValidate = "strona" ID="RegularExpressionValidator2" ValidationExpression="^((http|https)://)?([\w-]+\.)+[\w]+(/[\w- ./?]*)?$" runat="server"  ForeColor="Red"  ErrorMessage="Wpisz strone www jako np http://onet.pl"></asp:RegularExpressionValidator>
                </asp:CompareValidator>
				</label></p>
                <p>
                <span class ="tytul">Wybierz plec: </span><br/>
                <asp:RadioButtonList ID="plec" runat="server">
                        <asp:ListItem Value = "Mezczyzna">Mezczyzna</asp:ListItem>
                        <asp:ListItem Value = "Kobieta">Kobieta</asp:ListItem>
                        <asp:ListItem Value = "Nie chce zdradzic" Selected="True">Nie chce zdradzic</asp:ListItem>
                    </asp:RadioButtonList>
                    </p>
				<p>
					<asp:Button ID="submitButton" runat="server" Text="Submit" />
				</p>

                 <p>
            <span class ="tytul"><asp:Label ID="outputLabel" runat="server" Visible="False"></span>
            
            </asp:Label>
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
