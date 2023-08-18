//<-- 問１-->
function menseki(hankei) {
    return hankei*hankei*3.14;
}
document.write(menseki(5) + "<br>");　//<--半径５㎝-->
document.write(menseki(7) + "<br>");　//<--半径７㎝-->
document.write(menseki(10) + "<br>");　//<--半径１０㎝-->

document.write("<br>");
document.write("<br>");

//<-- 問２-->
function total(otona, kodomo) {
    return(otona*500) + (kodomo*200) + "円です。";
}
document.write(total(2, 4) + "<br>");　//<--大人2子供4-->
document.write(total(1, 5) + "<br>");　//<--大人1子供5-->
document.write(total(3, 7) + "<br>");　//<--大人3子供7-->