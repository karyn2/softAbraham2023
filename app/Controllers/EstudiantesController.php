<?php

namespace App\Controllers;
use App\Models\CursoModel;
use App\Models\usuarios;
use App\Models\EstudiantesModel;

class EstudiantesController extends BaseController
{
    public function index()
    {
        $estudiante = new EstudiantesModel();
        $usuario = new usuarios();
        // Obtener todos los usuarios con rol "estudiante" y estado "1" junto con sus datos de estudiante asociado y los cursos asociados con los estudiantes
        $estudiantes = $usuario->where('rol', 'estudiante')
        ->where('estado', 1)
        ->join('estudiantes', 'estudiantes.usuario_id = usuarios.id_usuario') 
        ->join('cursos', 'cursos.id_curso = estudiantes.curso_id')
        ->findAll();
    
        return view('estudiantes/studentsList', ['estudiantes' => $estudiantes]);
    }

    public function newStudent()
    {
        $curso = new CursoModel();
        $data = $curso->findAll();
        $data =['data' => $data];

        return view('estudiantes\newStudent', $data);
    }

    public function searchStudent(){
        // Verificar si se recibió el documento del usuario en la solicitud POST
        if (isset($_POST['documento'])) {
        $documento = $_POST['documento'];

        $usuario = new usuarios();
        $estudiante = new EstudiantesModel();

        $datosEstudiante = $usuario->buscarEstudiante($documento);

        $validar = $usuario->where('documento', $documento)
        ->where('estado', 1)
        ->join('estudiantes', 'estudiantes.usuario_id = usuarios.id_usuario') 
        ->countAllResults();
       
        if($validar>0){
            $respuesta="error";
            echo json_encode($respuesta);
            exit;
        }
        else{
            echo json_encode($datosEstudiante);
            exit;
        }

        }
        // Si no se recibió el documento o ocurrió un error, devolver un mensaje de error
        echo json_encode(['error' => 'Error al obtener los datos del usuario']);
        exit;
    }

    
    public function newStudentSave(){

        $estudiante = new EstudiantesModel();
        $usuario = new usuarios();
        $id_usuario = $this->request->getPost('id_usuario');
        $fechaRegistro = $this->request->getPost('fechaReg');
        $direccion = $this->request->getPost('direccion');
        $celular = $this->request->getPost('celular');
        $fechaNac = $this->request->getPost('fechaNac');
        $genero = $this->request->getPost('genero');
        $curso = $this->request->getPost('curso');
        $documentoAcudiente = $this->request->getPost('documentoAcudiente');
        $nombreAcudiente = $this->request->getPost('nombreAcudiente');
        $telefonoAcudiente = $this->request->getPost('telefonoAcudiente');
        $correoAcudiente = $this->request->getPost('correoAcudiente');
        
        
        $validarEstudiante = $estudiante->where('usuario_id', $id_usuario)
        ->countAllResults();
        $validarUsuario = $usuario->where('id_usuario', $id_usuario)
        ->countAllResults();
            
        if($validarEstudiante>0 || $validarUsuario==0){
            return redirect()->to(base_url('/Estudiantes'))->with('mensajeError', 'Ha ocurrido un error al agregar al estudiante');
        }
        else{
            // Realizar la actualización utilizando el modelo
            $data = array(
                'usuario_id' => $id_usuario,
                'fecha_registro_estuediante' => $fechaRegistro,
                'direccion_estudiante' => $direccion,
                'celular_estudiante' => $celular,
                'fecha_nacimiento' => $fechaNac,
                'genero_estudiante' => $genero,
                'curso_id' => $curso,
                'documento_acudiente' => $documentoAcudiente,
                'nombre_acudiente' => $nombreAcudiente,
                'telefono_acudiente' => $telefonoAcudiente,
                'correo_acudiente' => $correoAcudiente

            );

            $correct = $estudiante->insert($data);
            if($correct){
                return redirect()->to(base_url('/Estudiantes'))->with('mensaje', 'Estudiante creado con éxito');
            }
            else{
                return redirect()->to(base_url('/Estudiantes'))->with('mensajeError', 'Ha ocurrido un error al agregar al estudiante');
            }
        }      
    }

    public function editStudent()
    {
       // Verificar si se recibió el id del usuario en la solicitud POST
       if (isset($_POST['id_usuario'])) {
        $id = $_POST['id_usuario'];


        $estudiante = new EstudiantesModel();
        $usuario = new usuarios();
        // Obtener todos los usuarios con rol "estudiante" y estado "1" junto con sus datos de estudiante asociado y los cursos asociados con los estudiantes
        $estudiantes = $usuario->where('id_usuario',$id)
        ->join('estudiantes', 'estudiantes.usuario_id = usuarios.id_usuario') 
        ->join('cursos', 'cursos.id_curso = estudiantes.curso_id')
        ->first();
        
        $curso = new CursoModel();
        $cursos = $curso->findAll();

        $response = [
            'estudiantes' => $estudiantes,
            'cursos' => $cursos
        ];
        // Devolver los datos del usuario en formato JSON
        echo json_encode($response);
        exit;
       }
    // Si no se recibió el documento o ocurrió un error, devolver un mensaje de error
    echo json_encode(['error' => 'Error al obtener los datos del usuario']);
    exit;

        return view('estudiantes\editStudent');
    }

    public function editStudentSave(){
        
        $estudiante = new EstudiantesModel();
        $usuario = new usuarios();

        $id_usuario = $this->request->getPost('id_usuario');
        $fechaRegistro = $this->request->getPost('fechaReg');
        $direccion = $this->request->getPost('direccion');
        $celular = $this->request->getPost('celular');
        $fechaNac = $this->request->getPost('fechaNac');
        $genero = $this->request->getPost('genero');
        $curso = $this->request->getPost('curso');
        $documentoAcudiente = $this->request->getPost('docAcudiente');
        $nombreAcudiente = $this->request->getPost('nomAcudiente');
        $telefonoAcudiente = $this->request->getPost('telAcudiente');
        $correoAcudiente = $this->request->getPost('correoAcudiente');
        $id_estudiante = $this->request->getPost('id_estudiante');

        $validarUsuario = $usuario->where('id_usuario', $id_usuario)
        ->countAllResults();
            
        if($validarUsuario==0){
            return redirect()->to(base_url('/Estudiantes'))->with('mensajeError', 'Ha ocurrido un error al agregar al estudiante');
        }
        else{
            // Realizar la actualización utilizando el modelo
            $data = array(
                'fecha_registro_estuediante' => $fechaRegistro,
                'direccion_estudiante' => $direccion,
                'celular_estudiante' => $celular,
                'fecha_nacimiento' => $fechaNac,
                'genero_estudiante' => $genero,
                'curso_id' => $curso,
                'documento_acudiente' => $documentoAcudiente,
                'nombre_acudiente' => $nombreAcudiente,
                'telefono_acudiente' => $telefonoAcudiente,
                'correo_acudiente' => $correoAcudiente
            );

            $isCorrect = $estudiante->actualizarEstudiante($id_estudiante, $data);
            if($isCorrect){
                return redirect()->to(base_url('/Estudiantes'))->with('mensaje', 'Estudiante actualizado con éxito');
            } 
            else{
                return redirect()->to(base_url('/Estudiantes'))->with('mensaje', 'Ha ocurrido un error en la actualización');
            }
        }      


       
       
    }

}
