<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<div class="card">
      <div class="card-header">
        <b> Agregar Docentes y Estudiantes</b>
      </div>
      <div class="container mt-4" >
  
  <div class="row">
    
  <div class="col-md-6">
      <a href="#" class="menu-option" style="background-color: #419BED;">
      <img src="..\public\img\edtinst.png" alt="matricula" class="icono-sidebar">
        <div>Nuevo Docente</div>
      </a>
    </div>
  
    <div class="col-md-6">
      <a href="#" class="menu-option" style="background-color: #EB4FAD;">
      <img src="..\public\img\confCurso.png" alt="matricula" class="icono-sidebar">
        <div>Nuevo Estudiante</div>
      </a>
    </div>  
    </div>  
  
  <div class="row">
    <div class="col-md-6">
      <a href="#" class="menu-option" style="background-color: #32D2F6;">
      <img src="..\public\img\agrDocEst.png" alt="matricula" class="icono-sidebar">
        <div>Listado Docentes</div>
      </a>
    </div>
    
    <div class="col-md-6">
      <a href="#" class="menu-option" style="background-color: #14AE5C;">
      <img src="..\public\img\verEst.png" alt="matricula" class="icono-sidebar">
        <div>Listado Estudiantes</div>
      </a>
    </div>

    
  </div>
</div>
      </div>
    </div>

<?php echo $this->endSection() ?>