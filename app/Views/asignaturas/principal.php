<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<div class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-default"> 
                    <div class="card-header text-center">
                    <img src="..\public\img\usuariosSis.png" alt="usuarios"
                        class="icono-sidebar" /><b>ASIGNATURAS</b>
                    </div>
                    <div class="card-body">

                        <div class="text-right">
                            <a href="<?php echo base_url('/CrearAsignatura')?>" type="button" class="btn btn-primary">
                            <i class="fas fa-plus" id="pencil-icon" aria-hidden="true"></i>&nbsp;&nbsp;Nueva Asignatura</a>             
                            <br>
                        </div>

                        <div class="mt-4 table-container" >
                            <table class="table mt-4 table-striped table-bordered table-container" 
                            id="miTabla" name="miTabla" style="width:100%">
                                <thead class="headerTable bordered-table text-center">
                                    <tr class="text-center">
                                        <th scope="col">Id Asignatura</th>
                                        <th scope="col">Area Asignatura</th>
                                        <th scope="col">Descripcion de Asignatura</th>
                                        <th scope="col">Estado de Asignatura</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                                    <?php foreach($data as $i): ?>
                                    <tr>
                                        <th class="normal">
                                            <?php echo $i['id_asignatura'] ?>
                                        </th>
                                        <th class="normal">
                                            <?php echo $i['area_asignatura'] ?>
                                        </th>
                                        <th class="normal">
                                            <?php echo $i['descripcion_asignatura'] ?>
                                        </th>
                                        <th class="normal">
                                        <?php echo $i['estado_asignatura'] ? 'Activa' : 'Inactiva'; ?>
                                        </th>
                                        <th>
                                            <a href="#" type="button" class="btn btn-info btn-sm edit-btn" title="Editar">
                                                    <i id="pencil-icon" class="fas fa-pencil-alt" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm " title="Inactivar" onclick="">
                                                <i class="fas fa-ban" id="pencil-icon" aria-hidden="false"></i></a>
                                        </th>
                                        
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                         </div>

                    </div>
                </div>
            </div>
        </div>
</div>




<?php echo $this->endSection() ?>