    // Obtén una referencia al icono del menú y a la barra lateral
    const botonMenu = document.querySelector('.navbar-botonmenu');
    const sidebar = document.querySelector('.sidebar');

    // Agrega un evento de clic al icono del menú
    botonMenu.addEventListener('click', function (event) {
        event.preventDefault(); // Evita que el enlace se active

        // Alterna la clase 'activo' en la barra lateral para mostrar u ocultar
        sidebar.classList.toggle('activo');
    });