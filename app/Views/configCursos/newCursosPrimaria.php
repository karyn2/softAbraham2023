<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<div class="container">
  <form action="procesar_registro.php" method="POST">
    <h2>Datos del Curso de Primaria</h2>

    <div class="row">
      <div class="col-12">
        <label class="form-label">Buscar:</label>
        <input type="text" class="form-control" name="buscarIdModal" id="buscarIdModal" required
          placeholder="Ingrese nombre del Curso" />
      </div>
      <div class="col-12 mt-2" style="text-align: center">
        <button type="button" class="btn btn-info text-white" onclick="BuscarDocente()">
          <i class="bi bi-search"></i> &nbsp;
          Buscar Curso</button>
      </div>
    </div>


    <br>
    <div class="row">
      <div class="col-md-6">
        <label for="documento" class="control-label">Id del Curso</label>
        <input type="text" id="idcurso" name="idcurso" class="form-control" autocomplete="off">
      </div>
      <div class="col-md-6">
        <label for="nombre" class="control-label">Nombre del Curso</label>
        <input type="text" id="nomcurso" name="nomcurso" class="form-control" autocomplete="off">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12">
        <label for="correo" class="control-label">Asignaturas pertenecientes al Curso</label>
        <br><br>
      </div>
        <div class="col-md-2">
            <input type="checkbox" name="opciones" value="opcion1">
            <label for="opcion1">Opción 1</label> <br>

            <input type="checkbox" name="opciones" value="opcion2">
            <label for="opcion2">Opción 2</label><br>

            <input type="checkbox" name="opciones" value="opcion3">
            <label for="opcion3">Opción 3</label><br>

            <input type="checkbox" name="opciones" value="opcion4">
            <label for="opcion4">Opción 4</label><br>
        </div>

        <div class="col-md-2">
            <input type="checkbox" name="opciones" value="opcion1">
            <label for="opcion1">Opción 1</label><br>

            <input type="checkbox" name="opciones" value="opcion2">
            <label for="opcion2">Opción 2</label><br>

            <input type="checkbox" name="opciones" value="opcion3">
            <label for="opcion3">Opción 3</label><br>

            <input type="checkbox" name="opciones" value="opcion4">
            <label for="opcion4">Opción 4</label><br>
        </div>
        <div class="col-md-2">
            <input type="checkbox" name="opciones" value="opcion1">
            <label for="opcion1">Opción 1</label><br>

            <input type="checkbox" name="opciones" value="opcion2">
            <label for="opcion2">Opción 2</label><br>

            <input type="checkbox" name="opciones" value="opcion3">
            <label for="opcion3">Opción 3</label><br>

            <input type="checkbox" name="opciones" value="opcion4">
            <label for="opcion4">Opción 4</label><br>
        </div>
      
    </div>

    

    <br>   

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>


<?php echo $this->endSection() ?>