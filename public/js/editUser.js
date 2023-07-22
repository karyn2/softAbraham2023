function EditarUsuario(){
    var nombre = document.getElementById('nombre').value;

    if ( nombre=="") {
        Swal.fire(
            'Alerta',
            'El campo nombre es obligatorio',
            'warning'
          )
    }  else {
        $("#formEditar").submit(); // Enviar el formulario

    }

}

function recargarPagina() {
    window.location.reload();
}



