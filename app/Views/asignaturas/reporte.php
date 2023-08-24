<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SoftAbraham | 2023 </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" " rel="icon">
    <link href=" " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Template Main CSS File -->
    <link href="..\public\css\layout.css" rel="stylesheet">
    <link href="..\public\css\tables.css" rel="stylesheet">
    <link href="..\public\css\botones.css" rel="stylesheet">
    <link href="..\public\css\principal.css" rel="stylesheet">

    <!--iconos--> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">

</head>

<body>

        <div class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12" >
                <div class="card card-default"> 
                    <div class="card-header text-center">
                    <img src="..\public\img\asignaturas.jpg" alt="usuarios"
                        class="icono-sidebar" /><b>REPORTE ASIGNATURAS</b>
                    </div>
                    <div class="card-body">
                        <div class="text-right">
                            <a href="<?php echo base_url('demo-pdf')?>" type="button" class="btn btn-warning btn-sm" title="Inactivar" onclick="">
                            <i class="fas fa-save"></i>&nbsp; Generar PDF &nbsp;
                            </a>
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="bordered-table bodyTable normal" style="font-weight:normal">
                                        <?php foreach($data as $i): ?>
                                        <tr>
                                            <td class="normal"><?php echo $i['id_asignatura'] ?></td>
                                            <td class="normal"><?php echo $i['area_asignatura'] ?></td>
                                            <td class="normal td-description"><?php echo $i['descripcion_asignatura'] ?></td>
                                            <td class="normal"><?php echo $i['estado_asignatura'] ? 'Activa' : 'Inactiva'; ?></td>
                                            
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



    

    <!-- Bootstrap JS Files -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <!-- Template Main JS File -->
    <script src="..\public\js\layout.js"></script>


    <!--sweetAlert-->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    

</body>

</html>


