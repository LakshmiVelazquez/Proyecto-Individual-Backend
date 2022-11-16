/*Documento de Javascript */
function empleado1()
{
var nom1="Jose Alberto Jimenez Rabadilla<br>trabajador muy empeñado a su trabajo<br>con la capacidad de lograr cualquier tipo de trabajo<br>Que este envuelto en enjarres de casa<br>trabajador de alta recomendacion<br>";
document.getElementById('uno').innerHTML=nom1;
}
function empleado2()
{
var nom2="Jair Escobedo Beltran<br>compañero muy dedicado<br>con la habilidad de lograr Bardas muy seguras <br>asi como una perfeccion <br>y altura perfecta<br>";
document.getElementById('dos').innerHTML=nom2;
}
function empleado3()
{
var nom3="Javier Sanchez Solozar <br>trabajador empeñado decidido<br>con la capacidad de lograr cualquier tipo de trabajo<br>asi desarrollando un bombeo perfecto <br>de techos.<br>";
document.getElementById('tres').innerHTML=nom3;
}
function empleado4()
{
var nom4="Jose Luis Ornelas Marron<br>dedicado y ejemplar en el area de detalles <br>estructurales como en labrado,marmol,cantera<br> entre otros tipos";
document.getElementById('cuatro').innerHTML=nom4;
}

/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});
