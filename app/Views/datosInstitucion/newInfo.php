<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>


<div class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-default"> 
                    <div class="card-header text-center">
                    <img src="..\public\img\newInfo.png" alt="usuarios" class="icono-sidebar"><b>Agregar Información</b>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url()?>SaveData"
                            name="formdatosIn" id="formdatosIn">
                            <div class="row">
                                 <div class="col-md-6">
                                    <label for="codigo" class="control-label">Código Dane:</label>
                                    <input type="text" id="codigo" name="codigo"  class="form-control" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label for="nombre" class="control-label">Nombre Institución: </label>
                                    <input type="text" id="nombre" name="nombre" class="form-control"  autocomplete="off">
                                </div>
                               
                            </div>
            
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="Periodo" class="control-label">Periodo Escolar: </label>
                                    <input type="mail" id="periodo" name="periodo" class="form-control"  autocomplete="off">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="eslogan" class="control-label">Eslogan Institución:</label>
                                    <input type="text" id="eslogan" name="eslogan"  class="form-control" autocomplete="off">
                                </div>
                               
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="telefono" class="control-label">Teléfono: </label>
                                    <input type="number" id="telefono" name="telefono" class="form-control"  autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label for="correo" class="control-label">Correo: </label>
                                    <input type="email" id="correo" name="correo"  class="form-control" autocomplete="off">
                                    <label id="correoError" class="error-label mt-2 " style="color:red"></label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="direccion" class="control-label">Dirección: </label>
                                    <input type="text" id="direccion" name="direccion" class="form-control"  autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label for="jornada" class="control-label">Jornada: </label>
                                    <input type="text" id="jornada" name="jornada"  class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="mision" class="control-label">Misión: </label>
                                    <textarea name="mision" id="mision" cols="55" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="vision" class="control-label">Visión: </label>
                                    <textarea name="vision" id="vision" cols="55" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button  onclick="RegistrarDatos()" class="botonRegistrar" 
                                type="button" >
                                    <i class="fas fa-save"></i>&nbsp; Guardar &nbsp;
                                </button>
                                <button class="botonLimpiar" type="reset">
                                    <i class="fas fa-broom"></i>&nbsp; Limpiar &nbsp;
                                </button>
                            </div>
                         </form>              
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../public/js/validacionDatosInst.js"></script>

<?php echo $this->endSection() ?>