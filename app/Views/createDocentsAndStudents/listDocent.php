<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<div class="content container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header text-center">
                    <b>DOCENTES REGISTRADOS</b>
                </div>

                <div class="mt-4 table-container">
                    <table class="table mt-4 table-striped table-bordered table-container" id="miTabla" name="miTabla"
                        style="width:100%">
                        <thead class="headerTable bordered-table text-center">
                            <tr class="text-center">
                                <th scope="col">Documento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                <th scope="col">Número de Teléfono</th>
                                <th scope="col">Dirección Residencial</th>
                                <th scope="col">Fecha de Inicio de Empleo</th>
                                <th scope="col">Contacto de Emergencia</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                            <?php foreach($dataUsers as $i): ?>
                            <?php $docente = null; ?>
                            <?php foreach ($dataDocentes as $j) {
        if ($i['documento'] === $j['usuario_id'] && $i['rol'] === 'docente') {
            $docente = $j;
            break;
        }
    } ?>
                            <tr>
                                <th class="normal">
                                    <?php echo $i['documento'] ?>
                                </th>
                                <th class="normal">
                                    <?php echo $i['nombre'] ?>
                                </th>
                                <th class="normal">
                                    <?php echo $i['correo'] ?>
                                </th>
                                <th class="normal">
                                    <?php echo $i['rol'] ?>
                                </th>
                                <th class="normal">
                                    <?php echo $i['estado'] ?>
                                </th>
                                <th class="normal">
                                    <?php echo isset($docente['fecha_nacimiento']) ? $docente['fecha_nacimiento'] : '' ?>
                                </th>
                                <th class="normal">
                                    <?php echo isset($docente['numero_telefono']) ? $docente['numero_telefono'] : '' ?>
                                </th>
                                <th class="normal">
                                    <?php echo isset($docente['direccion_residencial']) ? $docente['direccion_residencial'] : '' ?>
                                </th>
                                <th class="normal">
                                    <?php echo isset($docente['fecha_inicio_empleo']) ? $docente['fecha_inicio_empleo'] : '' ?>
                                </th>
                                <th class="normal">
                                    <?php echo isset($docente['contacto_emergencia_id']) ? $docente['contacto_emergencia_id'] : '' ?>
                                </th>
                                <th>
                                    <a href="#" type="button" class="btn btn-info btn-sm" title="Editar"> <i
                                            class="fas fa-pencil-alt" id="pencil-icon" aria-hidden="true"></i></a>
                                    <a href="#" type="button" class="btn btn-warning btn-sm" title="Ver"><i
                                            class="fas fa-eye" id="pencil-icon" aria-hidden="true"></i></a>
                                    <a href="#" type="button" class="btn btn-danger btn-sm" title="Inactivar"><i
                                            class="fas fa-ban" id="pencil-icon" aria-hidden="true"></i></a>
                                </th>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Datatables-->



<!--Datatables-->

<?php echo $this->endSection() ?>