

/*Documento de Javascript */
function empleado1()
{
var nom1="Francisco Javier Garcia Perez<br>puntual, dedicado, perfeccionista,<br>un hombre esepcional para el puesto<br>con diversas cartas de recomendacion<br>el mejor en artefactos";
document.getElementById('uno').innerHTML=nom1;
}
function empleado2()
{
var nom2="Eliseo Madrid Gomez<br>realiza instalacionesexternaspar<br>lamparas<br>focos<br>u otro tipo deartefacto necesario<br>recomendado por FixIt";
document.getElementById('dos').innerHTML=nom2;
}
function empleado3()
{
var nom3="Antonio Costilla Pavon <br>hombre de uso industrial,capaz de identificar<br> areas capaces de resistir este tipo de<br> instalaciones 3 años de experiencia<br>joven, puntual y dedicado ";
document.getElementById('tres').innerHTML=nom3;
}
function empleado4()
{
var nom4="Leonardo Castillo Barragan<br>Asi como existen instalaciones por fuera de casa<br>este especialista se enfoca en <br>poner dentro de la casa<br>para enchufes o para switch<br>animate";
document.getElementById('cuatro').innerHTML=nom4;
}

/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});


