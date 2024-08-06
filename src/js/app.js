document.addEventListener("DOMContentLoaded", function() {
    eventListeners();

    darkMode();
});

function darkMode(){
    const prefiereMode = window.matchMedia('(prefers-color-scheme: dark)')
    // console.log(prefiereMode.matches) Comprobar si las preferencias del sistema oeprativo estan seteadas en dark mode o no
    if (prefiereMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereMode.addEventListener('change', function(){
        if (prefiereMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });


    const botonDarkMode = document.querySelector(".dark-mode-boton")
    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navegacionResponsive)
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}