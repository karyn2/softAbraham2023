<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>


<h5>hola agragar nuevos cursos</h5>


<div class="card mt-4">
      <div class="card-header blueCardHeader">
        <img src="..\public\img\agrCursos.jpg" alt="Nuevos Cursos" class="icono-sidebar"><b> Agregar Nuevos Cursos</b>
      </div>
    <div class="container mt-4" >
  
        <div class="row">
        
            <div class="col-md-6">
            <a href="<?php echo base_url()?>CursosPrimaria" class="menu-option" style="background-color: #419BED;">
            <img src="..\public\img\primaria.jpg" alt="Curso Primaria" class="icono-sidebar">
                <div>Primaria</div>
            </a>
            </div>
    
            <div class="col-md-6">
            <a href="<?php echo base_url()?>CursosBachillerato" class="menu-option" style="background-color: #32D2F6;">
            <img src="..\public\img\bachillerato.jpg" alt="Curso Bachillerato" class="icono-sidebar">
                <div>Bachillerato</div>
            </a>
            </div>  
        </div>  
  
    </div>

</div>

<?php echo $this->endSection() ?>