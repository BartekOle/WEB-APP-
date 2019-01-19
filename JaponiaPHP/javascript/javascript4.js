/*jslint browser:true */
/*jslint devel: true */
var pomoc = 1;
function zamianaimg() {
    "use strict";
    var indeks = Math.floor(Math.random() * 5) + 1;
    while (indeks === pomoc) {
        indeks = Math.floor(Math.random() * 5) + 1;
    }
    pomoc = indeks;
    switch (indeks) {
    case 1:
        document.getElementById("akiba").src = "obrazki/akiba.jpg";
        break;
    case 2:
        document.getElementById("akiba").src = "obrazki/akiba2.jpg";
        break;
    case 3:
        document.getElementById("akiba").src = "obrazki/akiba3.jpg";
        break;
    case 4:
        document.getElementById("akiba").src = "obrazki/akiba4.jpg";
        break;
    case 5:
        document.getElementById("akiba").src = "obrazki/akiba5.jpg";
        break;
    default:
        alert("Źle wylosowany numer zdjecia");
    }
}