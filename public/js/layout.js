// Función autoejecutable
(function() {
    "use strict";
  
    // Función de utilidad para seleccionar elementos del DOM
    const select = (el, all = false) => {
      el = el.trim();
  
      if (all) {
        return [...document.querySelectorAll(el)]; // Retorna una matriz de elementos
      } else {
        return document.querySelector(el); // Retorna un solo elemento
      }
    };
  
    // Función de utilidad para agregar eventos a los elementos del DOM
    const on = (type, el, listener, all = false) => {
      if (all) {
        select(el, all).forEach(e => e.addEventListener(type, listener)); // Agrega el evento a cada elemento seleccionado
      } else {
        select(el, all).addEventListener(type, listener); // Agrega el evento al elemento seleccionado
      }
    };
  
    // Función de utilidad para escuchar eventos de desplazamiento en un elemento
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener);
    };
  
    // Verificar si el elemento '.toggle-sidebar-btn' existe en el DOM
    if (select('.toggle-sidebar-btn')) {
      // Agregar evento de clic al elemento '.toggle-sidebar-btn'
      on('click', '.toggle-sidebar-btn', function(e) {
        select('body').classList.toggle('toggle-sidebar'); // Alternar la clase 'toggle-sidebar' en el elemento 'body'
      });
    }
  })();