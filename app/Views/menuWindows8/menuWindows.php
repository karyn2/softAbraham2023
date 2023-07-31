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
  
    <div class="row ">
      <div class="col-md-4 mt-2 sombra">
        <a href="#" class="menu-option bordeRedondo text-decoration-none " style="background-color: #32D2F6;">
        <img src="..\public\img\colegio.png" alt="matricula" class="icono-sidebar imgInicio mt-4" >
          <p class="letraBotonIn">
            Editar <br> Datos Institución
          </p> 
        </a>
      </div>

      <div class="col-md-4 mt-2">
        <a href="<?php echo base_url()?>AsignaturaCursos" class="menu-option bordeRedondo text-decoration-none" style="background-color: #419BED;">
        <img src="..\public\img\confiCursos.png" alt="matricula" class="icono-sidebar imgInicio mt-4">
        <p class="letraBotonIn">
            Configurar <br> Cursos
        </p> 
        </a>
      </div>
      <div class="col-md-4 mt-2">
        <a href="#" class="menu-option bordeRedondo text-decoration-none " style="background-color: #EB4FAD;">
        <img src="..\public\img\asigMatPro.png" alt="matricula" class="icono-sidebar imgInicio mt-4">
        <p class="letraBotonIn">
            Asignar <br> Materias Profesores
        </p>   
        </a>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4 ">
        <a href="<?php echo base_url()?>menuDS" class="menu-option bordeRedondo text-decoration-none" style="background-color: #419BED;">
        <img src="..\public\img\agrDocEst.png" alt="matricula" class="icono-sidebar imgInicio mt-4">
        <p class="letraBotonIn">
            Agregar <br> Docentes y Estudiantes
        </p>  
        </a>
    </div>
      
      <div class="col-md-4">
        <a href="#" class="menu-option bordeRedondo text-decoration-none" style="background-color: #EB4FAD;">
        <img src="..\public\img\newEstudiante.png" alt="matricula" class="icono-sidebar imgInicio mt-4">
        <p class="letraBotonIn">
            Ver <br> Estudiantes
        </p>   
        </a>
      </div>
      <div class="col-md-4">
        <a href="#" class="menu-option bordeRedondo text-decoration-none" style="background-color: #32D2F6">
        <img src="..\public\img\conHorCla.png" alt="matricula" class="icono-sidebar imgInicio mt-4">
        <p class="letraBotonIn">
            Configurar <br> Horarios de Clase
        </p>   
        </a>
      </div>
      
    </div>
</div>

<?php echo $this->endSection() ?>