var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
    overlay = document.getElementById('overlay'),
    btnCerrarPopup = document.getElementById('cerrar-popup')
;

btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active');
});

