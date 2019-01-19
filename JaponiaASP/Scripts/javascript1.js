/*jslint browser:true */
/*jslint devel: true */
document.addEventListener("click", function () {
    "use strict";
    document.body.style.backgroundImage = "url('obrazki/tlo2.jpg')";
});
var currentNode = document.getElementById("para1");
var idcount = 0;
var countclass = 0;
var strona = 0;
function nastepna() {
    "use strict";
    if (strona === 0) {
        document.getElementById("zmianaama").innerHTML =
            "Siostra władcy oceanu i boga burz Susanoo oraz boga księżyca Tsukuyomi (także Tsukiyomi). Amaterasu zesłała na ziemię swojego wnuka Ninigiego, który dał początek japońskiemu rodowi cesarskiemu. Uważana jest za dawczynię zdobyczy cywilizacji.";
        document.getElementById("zmianaben").innerHTML =
            "W sztuce przedstawiana jest z instrumentem strunowym o nazwie biwa i białym wężem. Często towarzyszy jej morski smok. Uważana jest także za rodzimą córkę boga mórz. ";
        document.getElementById("zmianasus").innerHTML =
            "Według Kojiki Susanoo narodził się, gdy Izanagi przemywał swój nos w trakcie oczyszczania się w wodzie morskiej po ucieczce z Krainy Ciemności. W Nihon-shoki natomiast bóg wiatrów przyszedł na świat jeszcze, zanim Izanami udała się do Krainy Ciemności. ";
        document.getElementById("zmianaten").innerHTML =
            "Na najstarszych wizerunkach tengu ukazywane są z dziobami, które następnie w procesie antropomorfizacji uległy przekształceniu w nienaturalnie długie nosy, dając początek współczesnemu popularnemu wyobrażeniu tengu. ";
        strona = strona + 1;
    } else if (strona === 1) {
        document.getElementById("zmianaama").innerHTML =
            "Według Kojiki Amaterasu narodziła się, gdy Izanagi przemywał lewe oko w trakcie oczyszczania się w wodzie morskiej po ucieczce z Krainy Ciemności. Według Nihon-shoki natomiast bogini słońca przyszła na świat zaraz po tym, jak uformowały się japońskie wyspy.";
        document.getElementById("zmianaben").innerHTML =
            "Jej kult, wyraźnie synkretyczny, pojawił się w XII wieku. Przyniesiony przez buddystów kult Saraswati nałożył się na rdzenny kult boginek morskich. Stąd też czczona jest jako kami w shintō pod imieniem Ichikishima-hime-no-mikoto.";
        document.getElementById("zmianasus").innerHTML =
            "W kronice napisano, że Susanoo otrzymał od Izanagiego władzę nad przestworzami mórz, jednak nie wywiązał się dobrze ze swoich obowiązków. Tęskniąc za matką, wciąż łkał i zawodził, aż przelał wszystkie swoje łzy, a rzeki i morza wyschły do cna.";
        document.getElementById("zmianaten").innerHTML =
            "Uważa się, że pierwsza pisemna wzmianka o tengu w Japonii znajduje się w 23. rozdziale Nihon Shoki z 720 r. Pojawia się w nim duża spadająca gwiazda, zidentyfikowana przez buddyjskiego kapłana jako niebiański pies i podobnie jak chiński tiangou przepowiadająca wybuch wojny.";
        strona = strona + 1;
    } else {
        alert("To już ostatnia strona");
    }
}
function poprzednia() {
    "use strict";
    if (strona === 0) {
        alert("To już pierwsza strona");
    } else if (strona === 1) {
        document.getElementById("zmianaama").innerHTML =
            "<strong>Amaterasu -</strong> Japońska bogini słońca, narodzona z lewego oka boga Izanagiego i wyznaczona przez niego do panowania na Wysokiej Równinie Niebios (tłum. również: Równina Wysokich Niebios, jap. Takama-ga-hara), główne bóstwo shintō.";
        document.getElementById("zmianaben").innerHTML =
            "<strong>Benten -</strong>Buddyjska bogini z mitologii japońskiej, pochodząca od hinduistycznej bogini Saraswati. Jedyna kobieta wśród siedmiorga bogów szczęścia. Opiekunka urody, bogactwa i muzyki, patronka zakochanych oraz artystów. ";
        document.getElementById("zmianasus").innerHTML =
            "<strong>Susano -</strong>Jedno z ważniejszych bóstw japońskiej religii shintō, porywczy i brutalny pan wiatrów oraz burzy. Brat bogini słońca Amaterasu oraz boga księżyca Tsukuyomiego. ";
        document.getElementById("zmianaten").innerHTML =
            " <strong>Tengu -</strong> Mityczne istoty, występujące w japońskim folklorze, sztuce, teatrze i literaturze. Jedne z najbardziej znanych yōkai (duchów – potworów). Przybierają postać drapieżnych ptaków i przedstawiano je jako istoty łączące ludzkie i ptasie cechy.";
        strona = strona - 1;
    } else {
        document.getElementById("zmianaama").innerHTML =
            "Siostra władcy oceanu i boga burz Susanoo oraz boga księżyca Tsukuyomi (także Tsukiyomi). Amaterasu zesłała na ziemię swojego wnuka Ninigiego, który dał początek japońskiemu rodowi cesarskiemu. Uważana jest za dawczynię zdobyczy cywilizacji.";
        document.getElementById("zmianaben").innerHTML =
            "W sztuce przedstawiana jest z instrumentem strunowym o nazwie biwa i białym wężem. Często towarzyszy jej morski smok. Uważana jest także za rodzimą córkę boga mórz. ";
        document.getElementById("zmianasus").innerHTML =
            "Według Kojiki Susanoo narodził się, gdy Izanagi przemywał swój nos w trakcie oczyszczania się w wodzie morskiej po ucieczce z Krainy Ciemności. W Nihon-shoki natomiast bóg wiatrów przyszedł na świat jeszcze, zanim Izanami udała się do Krainy Ciemności. ";
        document.getElementById("zmianaten").innerHTML =
            "Na najstarszych wizerunkach tengu ukazywane są z dziobami, które następnie w procesie antropomorfizacji uległy przekształceniu w nienaturalnie długie nosy, dając początek współczesnemu popularnemu wyobrażeniu tengu.  ";
        strona = strona - 1;
    }
}


function start()
{

document.getElementById("byIdButton").addEventListener("click", byId, false);
document.getElementById("appendButton").addEventListener("click", appendNode, false);
document.getElementById("replaceButton").addEventListener("click", replaceCurrent, false);
document.getElementById("removeButton").addEventListener("click", remove, false);
document.getElementById("ColorButton").addEventListener("click", changeColor, false);
document.getElementById("fontButton").addEventListener("click", changeFont, false);
}
window.addEventListener("load",start,false);
function byId()
{
if(currentNode.parentNode == document.body)
alert("Nie da się wybrać tego elementu");
else{
var id = document.getElementById("gbi").value;
var target = document.getElementById(id);
if(target)
switchTo(target);
}
}

function appendNode()
{
var newNode = createNewNode(document.getElementById("append").value);
document.getElementById("para1").appendChild(newNode);
switchTo(newNode);
}
function replaceCurrent()
{
if(currentNode.parentNode == document.body)
alert("Nie da się zamienić tego elementu");
else
{
var newNode = createNewNode(document.getElementById("replace").value);
currentNode.parentNode.replaceChild(newNode,currentNode);
switchTo(newNode);
}
}
function remove()
{
if(currentNode.parentNode == document.body)
alert("Nie da się usunąć tego elementu");
else
{
var oldNode = currentNode;
switchTo(oldNode.parentNode);
currentNode.removeChild(oldNode);
}
}
function changeColor()
{
var kolor = prompt("Podaj kolor czcionki dla komentarzy", "red");
var x = document.getElementsByClassName("newattr");
var i;
for (i = 0; i < x.length; i++) {
    x[i].style.color = kolor;
}
}
function changeFont()
{
var rodzaje = ["italic bold 20px arial,serif", "italic bold 30px Times New Roman, serif", "normal normal 15px arial,serif"];
var czcionka = prompt("Podaj numer od 0 do 2 dla wyboru czcionki", 1);
var x = document.getElementsByClassName("newattr");
var i;
for (i = 0; i < x.length; i++) {
    x[i].style.font = rodzaje[czcionka];
}
}
function createNewNode(text)
{
var newNode = document.createElement("p");
var nodeId = "Komentarz" + idcount;
idcount = idcount + 1;
newNode.setAttribute("id", nodeId);
newNode.setAttribute("class","newattr");
text = "[" + nodeId + "]" + text + " ";
newNode.appendChild(document.createTextNode(text));
return newNode;
}
function switchTo(newNode)
{
if(countclass > 0)
currentNode.setAttribute("class","newattr");
currentNode = newNode;
currentNode.setAttribute("class","highlighted")
document.getElementById("gbi").value = currentNode.getAttribute("id");
countclass = countclass + 1;
}