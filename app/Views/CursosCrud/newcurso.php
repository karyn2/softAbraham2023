<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>


<div class="content container-fluid" ><br>
    <div class="card" id="contenedor">
        <div class="card-header text-center" id="titulo">
        <img src="..\public\img\nuevoUser.png" alt="usuarios"
                        class="icono-sidebar" /><b>Registrar Nuevo curso</b>
        </div>
        <div class="card-body" id="area">
            <?php if (session()->getFlashdata('mensajeError')): ?>
                <div class="alert alert-danger mt-2 alert-dismissible fade show">
                    <?php echo session()->getFlashdata('mensajeError'); ?> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            
            <div class="row">
            <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="numero_telefono" class="form-label">Ingrese Nombre del curso</label>
                            <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" >
                        </div>
                        <div class="col-md-6">
                            <label for="direccion_residencial" class="form-label">Seleccione tipo de curso</label>
                            <input type="text" class="form-control" id="direccion_residencial" name="direccion_residencial" >
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="<?php echo base_url()?>cursos" type="button" class="botonRegresar text-decoration-none">
                        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp;&nbsp;Regresar</a> 
                        <button  onclick="RegistrarEstudiante()" class="botonRegistrar" 
                        type="button" >
                            <i class="fas fa-save"></i>&nbsp; Registrar &nbsp;
                        </button>
                        <button class="botonLimpiar" type="reset">
                            <i class="fas fa-broom"></i>&nbsp; Limpiar &nbsp;
                        </button>
                    </div>
            
                 

           
        </div>


        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<?php echo $this->endSection() ?>
