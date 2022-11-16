/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');
var registro=document.getElementById('Registro')

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});

/*Mensaje de Alerta para Registro*/

var Alerta_term = document.getElementById('cancelacion');

Alerta_term.addEventListener('click', function Alerta(){
    'use strict';
    alert("¿Seguro que quieres terminar?");
});

var Alerta_term = document.getElementById('Registro');

Alerta_term.addEventListener('click', function Alerta(){
    'use strict';
    alert("Tu Registro ha sido aceptado");
});

