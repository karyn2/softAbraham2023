<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<!--DATATABLES-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap.min.css">

<div class="content container-fluid" ><br>
    <div class="card" id="contenedor">
        <div class="card-header text-center" id="titulo">
        <img src="..\public\img\notas.png" alt="usuarios"
                        class="icono-sidebar" /><b> Asignación de Porcentajes</b>
        </div>
        <div class="card-body" id="area">
        <?php if (session()->getFlashdata('mensajeError')): ?>
                    <div class="alert alert-danger mt-2 alert-dismissible fade show">
                        <?php echo session()->getFlashdata('mensajeError'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('mensaje')): ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <?php echo session()->getFlashdata('mensaje'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>            
        <form method="POST" action="<?= base_url('/asignarPorcentaje'); ?>" name="formAsignar" id="formAsignar" class="mt-4">
                 <div class="row mt-3">
                        <div class="col-md-2">
                          <label class="control-label"><b>Código Curso:</b></label>
                        </div>
                        <div class="col-md-6">                             
                            <select name="curso" id="curso" class="form-select">
                                <option disabled selected>Seleccione un curso</option>
                                <?php foreach ($cursosAsignatura as $cursosAsignatura): ?>
                                    <option value="<?= $cursosAsignatura['id_curso_asignatura']; ?>"><?= $cursosAsignatura['id_curso_asignatura']; ?></option>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                          <label class="control-label"><b>Logro:</b></label>
                        </div>
                        <div class="col-md-6">                             
                            <select name="logro" id="logro" class="form-select">
                                <option disabled selected>Seleccione Logro</option>
                                <?php foreach ($logros as $logros): ?>
                                    <option value="<?= $logros['id_logro']; ?>"><?= $logros['nombre_logro']; ?></option>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <label for="porcenteje" class="control-label"><b>Porcentaje:</b></label>
                        </div>
                        <div class="col-md-6">                             
                            <input type="number" class="form-control" id="porcenteje" name="porcenteje" placeholder="Porcentaje" step="0.01">
                            <small class="text-muted" id="porcentaje-error"></small>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                          <label for="periodo" class="control-label"><b>Periodo:</b></label>
                        </div>
                        <div class="col-md-6">                             
                            <select id="periodo" name="periodo" class="form-select">
                                <option disabled selected>Seleccione Periodo</option>
                                <option value="PRIMER PERIODO">PRIMER PERIODO</option>
                                <option value="SEGUNDO PERIODO">SEGUNDO PERIODO</option>
                                <option value="TERCER PERIODO3">TERCER PERIODO</option>
                                <option value="CUARTO PERIODO">CUARTO PERIODO</option>

                             </select>
                        </div>
                        <div class="col-md-2">                         
                          <button type="submit" class="botonRegistrar" id="asignar" name="asignar">
                                <i class="fa fa-file"></i>&nbsp;&nbsp;Almacenar
                          </button>
                        </div>
                    </div>                           
                </form>
               

                <!-- Tabla para mostrar los estudiantes -->
                <div class="mt-4 table-container" >
                     <table class="table mt-4 table-striped table-bordered table-container" 
                        id="tablaPorcentaje" name="tablaPorcentaje" style="width:100%">
                        <thead class="headerTable bordered-table text-center">
                            <tr class="text-center">
                                <th scope="col" width="16%">id Asignatura</th>
                                <th scope="col" width="16%">Curso</th>
                                <th scope="col" width="13%">Logro</th>
                                <th scope="col" width="13%">Porcentaje</th>
                                <th scope="col" width="13%">Periodo</th>
                                <th scope="col" width="14%">Opciones</th>

                                
                            </tr>
                        </thead>
                        <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                            
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>                                
                                <td>
                                <a type="button" class="botonRegistrar btn-sm btn-guardar" title="Guardar" data-id_curso_asignatura="" >
                                  <i id="pencil-icon" class="fas fa-save" aria-hidden="true"></i>
                                </a>
                                    <a href="#" type="button" class="btn btn-warning btn-sm view-btn" title="Ver">
                                        <i class="fas fa-eye" id="pencil-icon" aria-hidden="true"></i></a>
                                </td>                             
                            </tr>
                            
                        </tbody>
                       </table>
                     </div>
                
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tablaPorcentaje').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    });

    const porcentajeInput = document.getElementById('porcenteje');
    const porcentajeError = document.getElementById('porcentaje-error');

    porcentajeInput.addEventListener('input', function() {
        const porcentajeValue = parseFloat(porcentajeInput.value);
        if (isNaN(porcentajeValue) || porcentajeValue <= 0 || porcentajeValue >= 1) {
            porcentajeError.textContent = 'El porcentaje debe ser un valor entre 0 y 1 (sin ser 0 ni 1)';
        } else {
            porcentajeError.textContent = '';
        }
    });
</script>



<?php echo $this->endSection() ?>