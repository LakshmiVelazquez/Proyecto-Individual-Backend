/*Documento de Javascript */
function empleado1()
{
var nom1="Andre Cortez Arguimon <br>ingeniero especialista en todas<br>las partes de una area internas<br>o externas , asi como manteniento.";
document.getElementById('uno').innerHTML=nom1;
}
function empleado2()
{
var nom2="Alberto Sisneros valadez <br>personal dedicado y especialistaen su area asi <br>como un buen empleado y recomendado <br>de diversas agencias de autos <br>100% recomendado";
document.getElementById('dos').innerHTML=nom2;
}
function empleado3()
{
var nom3="Eduardo Garibaldi Sosa <br>complemento de equipo capacitado<br>para identificar las mas minimas problematicas<br>asi como dedicado en la area de amortiguadores,<br>mangos,rotulas,etc.";
document.getElementById('tres').innerHTML=nom3;
}
function empleado4()
{
var nom4="Axel de Jesus Soto Garcia<br>nuevo personal,titulado de una empresa reconocida,<br>directamente concentrado en la trasera<br>de diferenciales<br>ya sean golpes, desgastes o simple mantenimiento";
document.getElementById('cuatro').innerHTML=nom4;
}


/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});


