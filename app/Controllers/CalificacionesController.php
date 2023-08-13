<?php

namespace App\Controllers;
use App\Models\CursoModel;
use App\Models\CursoAsignaturaModel;
use App\Models\EstudiantesModel;
use App\Models\LogroModel;
use App\Models\AsignaturaLogroModel;

class CalificacionesController extends BaseController
{
    public function index()
    {
        $curso = new CursoModel();
        $estudiantes = []; // Lista vacía de estudiantes
        $nomCursoAsig = []; // Inicializamos con un arreglo vacío

        $nombreCurso = ""; 
        $nombreAsignatura = ""; 
    
        // Asignamos los valores a $nomCursoAsig
        $nomCursoAsig['area_asignatura'] = $nombreAsignatura;
        $nomCursoAsig['nombre_curso'] = $nombreCurso;

        $data = [
            'cursos' => $curso->findAll(),
            'estudiantes' => $estudiantes,
            'nomCursoAsig' => $nomCursoAsig
        ];

        return view('Calificaciones\grades', $data);
    }

    public function getAsignaturasporCurso() {

        if (isset($_POST['curso'])) {
            $curso_id = $_POST['curso'];

            $asigCurso = new CursoAsignaturaModel();
    
            $asignaturas = $asigCurso->where('curso_id', $curso_id)
            ->join('asignaturas', 'cursosAsignatura.asignatura_id = asignaturas.id_asignatura') 
            ->findAll();
            if($asignaturas==null){
                echo json_encode(['vacio' => 'vacio']);
                exit;
            }
            else{
                echo json_encode($asignaturas);
                exit;
            }
           
        }
        else{
            echo json_encode(['error' => 'Error al obtener los datos del usuario']);
            exit;
        }
    }

    public function obtenerEstudiantes(){

        $asigCurso = new CursoAsignaturaModel();
        $curso = new CursoModel();

        $curso_id = $this->request->getPost('curso');
        $asignatura_id = $this->request->getPost('asignatura');

        $estudiantes = $asigCurso
            ->where('cursosAsignatura.curso_id', $curso_id)
            ->where('asignatura_id', $asignatura_id)
            ->join('estudiantes', 'cursosAsignatura.curso_id = estudiantes.curso_id') 
            ->join('usuarios', 'estudiantes.usuario_id = usuarios.id_usuario')
            ->findAll();

        $nomCursoAsig = $asigCurso
            ->where('cursosAsignatura.curso_id', $curso_id)
            ->where('asignatura_id', $asignatura_id)
            ->join('asignaturas', 'cursosAsignatura.asignatura_id = asignaturas.id_asignatura')
            ->join('cursos', 'cursosAsignatura.curso_id = cursos.id_curso')
            ->first();    

        $curso = new CursoModel();
        $data = [
            'cursos' => $curso->findAll(),
            'estudiantes' => $estudiantes,
            'nomCursoAsig' => $nomCursoAsig
        ];
    
        return view('Calificaciones\grades', $data);
    }


    public function guardarCalificaciones(){

        try{
        // Verificar si se recibió el documento del usuario en la solicitud POST
        if (isset($_POST['id_curso_asignatura']) && isset($_POST['documento'])
         && isset($_POST['hacer'])
         && isset($_POST['saber']) && isset($_POST['ser']) ) {

            $id_curso_asignatura = $_POST['id_curso_asignatura'];
            $documento = $_POST['documento'];
            $hacer = $_POST['hacer'];
            $saber = $_POST['saber'];
            $ser = $_POST['ser'];
            

            $logroAsig = new AsignaturaLogroModel();
          
            $porcentajeHacer= $logroAsig->porcentajeLogro(1, $id_curso_asignatura);
            $porcentajeSaber= $logroAsig->porcentajeLogro(2, $id_curso_asignatura);
            $porcentajeSer= $logroAsig->porcentajeLogro(3, $id_curso_asignatura);

            $valHacer= $porcentajeHacer['porcenteje'] * floatval($hacer);
            $valSaber= $porcentajeSaber['porcenteje'] * floatval($saber);
            $valSer= $porcentajeSer['porcenteje'] * floatval($ser);

            $promedio=$valHacer+$valSaber+$valSer;
        
            echo json_encode($promedio);
            
        }
        else{
            echo json_encode(['error' => 'Error al obtener los datos del usuario']);
            exit;
        }
        }
        catch (Exception $e) {
            echo json_encode(['error' => 'Error en el servidor: ' . $e->getMessage()]);
        }


       
        
    }

     


        //guardar en la tabla notas los valores obtenidos
        // validar que si no hay los logros establecidos para la materia no pueda registrar las notas
        //validar que mande por lo menos una nota antes de guardar

}
