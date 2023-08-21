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
                                                    <a href="<?php echo base_url("Editar/") . $i['id_asignatura'] ?>" type="button"
                                                        class="btn btn-info btn-sm edit-btn" title="Editar">
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
</div>




<?php echo $this->endSection() ?>