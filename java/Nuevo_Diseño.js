/*Boton Funcional de Navegador*/

var Menu_Boton = document.getElementById('Menu_icon');

var Menu = document.getElementById('Menu');

Menu_Boton.addEventListener('click',function(){
    'use strict';
    Menu.classList.toggle('Mostrar_Menu');
});

/*Mensaje de Alerta para Lectura de Terminos y condiciones*/

var Alerta_term = document.getElementById('Alert');

Alerta_term.addEventListener('click', function Alerta(){
    'use strict';
    alert("Regresarás al Registro,Esperamos que hayas leido bien los terminos y condiciones cuidadosamente,de lo contrario te pedimos que vuelvas a leerlás");
});

