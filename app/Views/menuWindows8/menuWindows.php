<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container mt-4" >
  
    <div class="row">
      <div class="col-md-4">
        <a href="#" class="menu-option" style="background-color: #32D2F6;">
        <img src="..\public\img\edtinst.png" alt="matricula" class="icono-sidebar">
          <div>Editar<br>Datos de institución</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="menu-option" style="background-color: #419BED;">
        <img src="..\public\img\confCurso.png" alt="matricula" class="icono-sidebar">
          <div>Configurar Cursos</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="menu-option" style="background-color: #EB4FAD;">
        <img src="..\public\img\asgMatPro.png" alt="matricula" class="icono-sidebar">
          <div>Asigna<br>Materias Profesores</div>
        </a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo base_url()?>menuDS" class="menu-option" style="background-color: #419BED;">
        <img src="..\public\img\agrDocEst.png" alt="matricula" class="icono-sidebar">
          <div>Agregar<br>Docentes y Estudiantes</div>
        </a>
      </div>
      
      <div class="col-md-4">
        <a href="#" class="menu-option" style="background-color: #EB4FAD;">
        <img src="..\public\img\verEst.png" alt="matricula" class="icono-sidebar">
          <div>Ver<br>Estudiantes</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="menu-option" style="background-color: #32D2F6">
        <img src="..\public\img\conHorCla.png" alt="matricula" class="icono-sidebar">
          <div>Configurar<br>Horarios de clase</div>
        </a>
      </div>
      
    </div>
</div>

<?php echo $this->endSection() ?>