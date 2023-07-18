<?php echo $this->extend('layout\layout') ?>

<?php echo $this->section('content') ?>

<!--DATATABLES-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap.min.css">


<div class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-default"> 
                    <div class="card-header text-center">
                       <b>USUARIOS DEL SISTEMA</b>
                    </div>
                    <div class="card-body">
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

                        <div class="text-right">
                            <a href="<?php echo base_url()?>register" type="button" class="btn btn-primary">
                            <i class="fas fa-plus" id="pencil-icon" aria-hidden="true"></i>&nbsp;&nbsp;Nuevo usuario</a>             
                            <br>
                        </div>
                        
                        <div class="mt-4 table-container" >
                            <table class="table mt-4 table-striped table-bordered table-container" 
                            id="miTabla" name="miTabla" style="width:100%">
                                <thead class="headerTable bordered-table text-center">
                                    <tr class="text-center">
                                        <th scope="col">Documento</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">usuario</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                                    <?php foreach($data as $i): ?>
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
                                        <th>
                                            <a href="#" type="button" class="btn btn-info btn-sm" title="Editar" > <i class="fas fa-pencil-alt" id="pencil-icon" aria-hidden="true"></i></a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm" title="Ver"><i class="fas fa-eye" id="pencil-icon" aria-hidden="true"></i></a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm" title="Inactivar"><i class="fas fa-ban" id="pencil-icon" aria-hidden="true"></i></a>
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
    </div>



<!--Datatables-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
    $('#miTabla').DataTable(
        {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        }
    );
    
    });
</script>

<?php echo $this->endSection() ?>