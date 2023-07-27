function RegistrarDatos(){
    var codigo = document.getElementById('codigo').value;
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;

    //validar correo
    var correoValido = /\S+@\S+\.\S+/.test(correo);

    if (codigo == "" || nombre=="" ) {
        Swal.fire(
            'Alerta',
            'los campos código y correo son obligatorios',
            'warning'
          )
    } else {
      if ( correo!="" && !correoValido) {
        correoError.innerHTML = 'Correo electrónico inválido';
        alert()
      } else {
        correoError.innerHTML = '';
        console.log('correcto');
        $("#formdatosIn").submit(); // Enviar el formulario
      }
    }

}
