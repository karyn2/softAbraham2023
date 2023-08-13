$(document).ready(function() {
    var baseUrl = $('#base-url').data('url');
    const boton = document.getElementById('asignar');

    // Manejar el evento change del select de asignaturas
    $("#curso").on("change", function() {
        var curso = $("#curso").val();

        if (curso !== "") {
            // Realizar la solicitud AJAX al controlador para obtener las asignaturas del curso seleccionado
            $.ajax({
                url:  baseUrl + 'getAsignaturasporCurso',
                method: "POST",
                data: { curso: curso },
                dataType: "json",
                success: function(data) {

                    if(data.vacio=="vacio"){
                        $("#asignatura").empty().prop("disabled", true);
                        boton.disabled = true;
                        $("#asignatura").append("<option value=''>" + 'No hay asignaturas para este curso'+ "</option>");
                     
                    }
                    else{
                        // Limpiar y habilitar el select de asignaturas
                        $("#asignatura").empty().prop("disabled", false);
                        // Agregar las opciones al select de asignaturas
                        $.each(data, function(key, value) {
                            $("#asignatura").append("<option value='" + value.id_asignatura+ "'>" + value.area_asignatura + "</option>");
                        });
                        boton.disabled = false;
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Por favor, inténtalo de nuevo más tarde.', 'error');
                }
            });
        } else {
            $("#asignatura").empty().prop("disabled", true);
        }
    });


    // Manejar el clic en el botón "guardar"
    $('.btn-guardar').click(function () {            
        var id_curso_asignatura = $(this).data('id_curso_asignatura');
        var fila = $(this).closest('tr');
        var documento = fila.find('td:nth-child(1)').text();
        var ser = fila.find('td:nth-child(3) input').val();
        var saber = fila.find('td:nth-child(4) input').val();
        var hacer = fila.find('td:nth-child(5) input').val();
        var promedioInput = fila.find('td:nth-child(6) input');

        // como saber la fila seleccionada tambien para enviarla como parametro
        //y poder ubicar la nota en la fila correspondiente
        alert('id: '+id_curso_asignatura+'doc: '+documento+'ser: '+ser+' saber: '+saber+' hacer: '+hacer)
        // Enviar una solicitud AJAX al controlador
        $.ajax({
            url: baseUrl + 'guardarCalificaciones',
            type: 'POST',
            data: {
                id_curso_asignatura: id_curso_asignatura,
                documento: documento,
                ser:ser,
                saber:saber,
                hacer:hacer
            },
            success: function (response) {

                // Manejar la respuesta JSON aquí
                var resultado = JSON.parse(response); // Convertir la respuesta JSON a objeto

                promedioInput.val(resultado);
                console.log(resultado)
                // Hacer algo con el resultado, por ejemplo, mostrarlo en una alerta
                alert('Resultado: ' + resultado);

            },
            error: function (xhr, status, error) {
                console.log(error);
                alert('Error en la solicitud AJAX: ' + error);
            }
        });
    });


});


function asignarCalificaciones(){

    var curso = document.getElementById('curso');
    var asignatura = document.getElementById('asignatura');
    var selectedCurso= curso.selectedIndex;

    if (selectedCurso==0) {
        Swal.fire(
            'Alerta',
            'Debe seleccionar un curso y una asignatura',
            'warning'
          )
    } 
    else {
        $("#formAsignar").submit(); // Enviar el formulario
    }

}