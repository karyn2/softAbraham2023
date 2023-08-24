<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<link href="..\public\css\asignaturas.css" rel="stylesheet">

<div class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-default"> 
                    <div class="card-header text-center">
                    <img src="..\public\img\asignaturas.jpg" alt="usuarios"
                        class="icono-sidebar" /><b>ASIGNATURAS</b>
                    </div>
                    <div class="card-body">

                        <div class="text-right">
                            <a href="<?php echo base_url('/CrearAsignatura')?>" type="button" class="btn btn-primary">
                            <i class="fas fa-plus" id="pencil-icon" aria-hidden="true"></i>&nbsp;&nbsp;Nueva Asignatura</a>             
                            
                        </div>

                        <div class="mt-4 table-container table-responsive tablaasignatura" >
                        <div class="table-responsive">
                                <table class="table mt-4 table-striped table-bordered table-container" id="miTabla" name="miTabla">
                                    <thead class="headerTable bordered-table text-center">
                                        <tr class="text-center">
                                            <th scope="col">Código</th>
                                            <th scope="col">Área</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                                        <?php foreach($data as $i): ?>
                                        <tr>
                                            <td class="normal"><?php echo $i['id_asignatura'] ?></td>
                                            <td class="normal"><?php echo $i['area_asignatura'] ?></td>
                                            <td class="normal td-description"><?php echo $i['descripcion_asignatura'] ?></td>
                                            <td class="normal"><?php echo $i['estado_asignatura'] ? 'Activa' : 'Inactiva'; ?></td>
                                            <td>                                                
                                                <div class="btn-group" role="group">
                                                    <a href="" type="button" class="btn btn-info btn-sm edit-btn" title="Editar"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editarAsignatura" 
                                                        data-bs-whatever="@mdo"
                                                        data-id="<?php echo base_url("Editar/") . $i['id_asignatura'] ?>">
                                                        <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" type="button" class="btn btn-danger btn-sm" title="Inactivar" onclick="">
                                                        <i class="fas fa-ban" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>
<!--InicioMdal Asig-->
<div class="modal fade" id="editarAsignatura" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header headerModal text-center">
                <h4 class="modal-title " id="editModalLabel">Editar Usuario</h4>
                <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
            </div>
            <form action="<?php echo base_url('editarAsignatura')?>" method="POST" id="formeditarAsignatura">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                        <label for="documento">Código:</label>
                        </div>
                        <div class="col-md-9">                        
                        <input type="text" class="form-control" id="id_asignatura" name="id_asignatura" readonly>
                        </div>            
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                        <label for="nombre">Area:</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" id="area" name="area" >
                        </div>            
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                        <label for="correo">Descripcion:</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" >
                        </div>            
                    </div>                    
                    <div class="row mt-2">
                        <div class="col-md-3">
                        <label for="estado">Estado:</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="estado" name="estado" >
                                 <option value="0">Inactivo</option> 
                                 <option value="1">Activo</option>
                                                                     
                            </select>
                        </div>            
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Cerrar</button>
                    <button   class="botonRegistrar" type="submit" onclick="" >
                        <i class="fas fa-save"></i>&nbsp; Guardar cambios &nbsp;
                     </button>
                     
                </div>
            </form>
           
        </div>
    </div>
</div>
<!--FinMdalAsig-->
</div>


<script src="<?php echo base_url('js/asignatura.js'); ?>"></script>

<?php echo $this->endSection() ?>