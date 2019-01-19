/*jslint browser:true */
/*jslint devel: true */
		var helpArray = ["Wpisz miejsce zamieszkania","Wybeierz swoj ulubiony kolor", "Podaj rok i miesiac urodzenia", "Wybeirz w ilu procentach podoba ci sie strona", "Wpisz wyszukiwaną frazę", "Wpisz swoja ulubiona strone", " "];
		var helpText;
		function init()
		{
		helpText = document.getElementById("helpText");
		registerListeners(document.getElementById("imie"),0);
		registerListeners(document.getElementById("kolor"),1);
		registerListeners(document.getElementById("rokimiesiac"),2);
		registerListeners(document.getElementById("podoba"),3);
		registerListeners(document.getElementById("szukanie"),4);
		registerListeners(document.getElementById("strona"),5);
		var myForm = document.getElementById("myForm");
		myForm.addEventListener("submit", function() { return confirm("Jesteś pewny, że chcesz zatwierdzić wybory?");},false);
		myForm.addEventListener("reset", function() { return confirm("Jesteś pewny, że chcesz zresetowac wybory?");},false);
		}
		function registerListeners(object, messageNumber)
		{
			object.addEventListener("focus", function(){helpText.innerHTML = helpArray[messageNumber];}, false);
			object.addEventListener("blur", function(){helpText.innerHTML = helpArray[6];}, false);
		}
		window.addEventListener("load",init,false);