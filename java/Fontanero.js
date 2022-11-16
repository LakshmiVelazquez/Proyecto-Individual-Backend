/*Documento de Javascript */
function empleado1()
{
var nom1="Diego Cortez Sanchez <br>especialista en esta area<br>con la capacidad de cumplir la <br>necesidad basica y compleja <br>asi logrando antes un buen plano<br>";
document.getElementById('uno').innerHTML=nom1;
}
function empleado2()
{
var nom2="Javier Solis Armas <br>dedicado, y adecuado<br>para graficar las distinas formas de hacer <br>o instalar estos tipos de artefactos <br>si necesidad de comprar<br>";
document.getElementById('dos').innerHTML=nom2;
}
function empleado3()
{
var nom3="Juan Cortez Ramirez <br>enfocado en las tuberias internas<br>con diversas estrategias para logar<br>un buen acomodo y una perfecta funcionalidad<br>";
document.getElementById('tres').innerHTML=nom3;
}
function empleado4()
{
var nom4="Hector Rodriguez Paz<br>personal dedicado y ejemplar<br>con la capacidad de lograr cualquier tipo de trabajo<br>como desahues o creacion de<br>nuevas estructuras<br>";
document.getElementById('cuatro').innerHTML=nom4;
}

/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});
