<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>
<div class="container">
  <form action="procesar_registro.php" method="POST">
    <h2>Datos del Profesor</h2>

    <div class="row">
      <div class="col-12">
        <label class="form-label">Buscar:</label>
        <input type="text" class="form-control" name="buscarIdModal" id="buscarIdModal" required
          placeholder="Ingrese identificación del empleado" />
      </div>
      <div class="col-12 mt-2" style="text-align: center">
        <button type="button" class="btn btn-info text-white" onclick="BuscarDocente()">
          <i class="bi bi-search"></i> &nbsp;
          Buscar Docente</button>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label for="documento" class="control-label">Número de documento:</label>
        <input type="text" id="documento" name="documento" class="form-control" autocomplete="off">
      </div>
      <div class="col-md-6">
        <label for="nombre" class="control-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" autocomplete="off">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label for="correo" class="control-label">Correo:</label>
        <input type="email" id="correo" name="correo" class="form-control" autocomplete="off">
        <label id="correoError" class="error-label mt-2" style="color:red"></label>
      </div>
      <div class="col-md-6 mt-4">
        <select class="form-select" id="rol" name="rol">
          <option selected disabled value="">Rol de Usuario</option>
          <option value="administrador">Administrador</option>
          <option value="docente">Docente</option>
          <option value="acudiente">Acudiente</option>
          <option value="estudiante">Estudiante</option>
        </select>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
      </div>
      <div class="col-md-6">
        <label for="numero_telefono" class="form-label">Número de Teléfono:</label>
        <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" required>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label for="direccion_residencial" class="form-label">Dirección Residencial:</label>
        <input type="text" class="form-control" id="direccion_residencial" name="direccion_residencial" required>
      </div>
      <div class="col-md-6">
        <label for="fecha_inicio_empleo" class="form-label">Fecha de Inicio de Empleo:</label>
        <input type="date" class="form-control" id="fecha_inicio_empleo" name="fecha_inicio_empleo" required>
      </div>
    </div>

    <br>

    <h2>Títulos</h2>

    <div id="titulos">
      <div class="titulo">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="titulo_academico" class="form-label">Título Académico:</label>
            <input type="text" class="form-control" name="titulo_academico[]" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="especializacion" class="form-label">Especialización:</label>
            <input type="text" class="form-control" name="especializacion[]" required>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn btn-primary" onclick="agregarTitulo()">Agregar Título</button>

    <h2>Experiencia Docente</h2>

    <div id="experiencias_docentes">
      <div class="experiencia-docente">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="experiencia_docente" class="form-label">Experiencia Docente (años):</label>
            <input type="number" class="form-control" name="experiencia_docente[]" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="materias" class="form-label">Materias:</label>
            <input type="text" class="form-control" name="materias[]" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nivel_educativo" class="form-label">Nivel Educativo:</label>
            <input type="text" class="form-control" name="nivel_educativo[]" required>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-primary" onclick="agregarExperienciaDocente()">Agregar Experiencia Docente</button>
      <br>
    <h2>Contactos de Emergencia</h2>
    <div id="contactos">
      <div class="contactos">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombre_emergencia" class="form-label">Nombre Completo:</label>
            <input type="text" class="form-control" name="nombre_emergencia" required>
          </div>
          <div class="col-md-6 mb-3">
          <label for="numero_telefono_emergencia" class="form-label">Número de Teléfono:</label>
          <input type="text" class="form-control" id="numero_telefono_emergencia" name="numero_telefono_emergencia" required>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="relacion_emergencia" class="form-label">Relación:</label>
            <input type="text" class="form-control" name="relacion_emergencia" required>
          </div>          
        </div>
      </div>
    </div>

    <br>   

    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

<?php echo $this->endSection() ?>