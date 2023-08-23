<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Estudiantes</title>
    <style>
        @page {
            size: 356mm 216mm;
            margin: 1.5cm;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="logo">
    <img src="https://scontent-bog1-1.xx.fbcdn.net/v/t39.30808-6/370483178_286424474011785_1632106532468805365_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=i8cMloBCbhUAX8EoXrW&_nc_ht=scontent-bog1-1.xx&oh=00_AfDfx_vc4vXVXN-bkDDb7ASuhvXSF_6RnvFMIDQ4zCIBZQ&oe=64EB11FB" alt="Logo " class="imagen-pequena">

    </div>
    <h1>Reporte de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>Número de Documento</th>
                <th>Nombre Estudiante</th>
                <th>Número Celular</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Nombre acudiente</th>
                <th>Teléfono acudiente</th>
                <th>Correo acudiente</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante) : ?>
            <tr>
                <td><?= esc($estudiante['documento']); ?></td>
                <td><?= esc($estudiante['nombre']); ?></td>
                <td><?= esc($estudiante['celular_estudiante']); ?></td>
                <td><?= esc($estudiante['correo']); ?></td>
                <td><?= esc($estudiante['direccion_estudiante']); ?></td>
                <td><?= esc($estudiante['nombre_acudiente']); ?></td>
                <td><?= esc($estudiante['telefono_acudiente']); ?></td>
                <td><?= esc($estudiante['correo_acudiente']); ?></td>
                <td><?= esc($estudiante['nombre_curso']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


