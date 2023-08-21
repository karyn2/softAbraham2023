<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AsignaturaLogroModel;
use App\Models\CursoAsignaturaModel;
use App\Models\LogroModel;


class AsignaturaLogroController extends Controller{

    public function index()
    {
        
        $datosDisponibles = $this->obtenerDatosSelect();
        $datos['cursosAsignatura'] = $datosDisponibles['cursosAsignatura'];
        $datos['logros'] = $datosDisponibles['logros'];
        $datos['asignaturaLogro'] = $this->obtenerDatosTabla();
        return view('Cursos/AsignaturaLogroView', $datos);
    }

    public function obtenerDatosSelect()
    {
        $cursoAsignaturaModel = new CursoAsignaturaModel();
        $logroModel = new LogroModel();

        $datosDisponibles = [
            'cursosAsignatura' => $cursoAsignaturaModel->findAll(),
            'logros' => $logroModel->findAll(),
        ];

        return $datosDisponibles;
    }

    public function asignarPorcentaje()
    {
        $id_curso_asignatura = $this->request->getPost('curso');
        $id_logro = $this->request->getPost('logro');
        $porcenteje = $this->request->getPost('porcenteje');
        $periodo = $this->request->getPost('periodo');
    
        // Verificar si se ha seleccionado un valor en los campos obligatorios
        if (empty($id_curso_asignatura) || empty($id_logro) || empty($porcenteje) || empty($periodo)) {
            return redirect()->to(base_url('/AsignaturaLogro'))->with('mensajeError', 'Debes seleccionar un valor en todos los select.');
        }
    
        // Validar el porcentaje
        if (!preg_match('/^(0\.\d{2}|0\.0[1-9]|0\.1[0-9]|1\.00)$/', $porcenteje)) {
            return redirect()->to(base_url('/AsignaturaLogro'))->with('mensajeError', 'El porcentaje debe ser un valor entre 0 y 1 con 2 cifras después del punto decimal (ejemplo: 0.25).');
        }
    
        $asignaturaLogroModel = new AsignaturaLogroModel();
        $existeCombinacion = $asignaturaLogroModel
            ->where('curso_asignatura_id', $id_curso_asignatura)
            ->where('logro_id', $id_logro)
            ->where('periodo', $periodo)
            ->countAllResults() > 0;
    
        if ($existeCombinacion) {
            return redirect()->to(base_url('/AsignaturaLogro'))->with('mensajeError', 'Ya existe una combinación con los valores seleccionados.');
        }
    
        $data = [
            'curso_asignatura_id' => $id_curso_asignatura,
            'logro_id' => $id_logro,
            'porcenteje' => $porcenteje,
            'periodo' => $periodo,
        ];
    
        if ($asignaturaLogroModel->insert($data)) {
            return redirect()->to(base_url('/AsignaturaLogro'))->with('mensaje', 'Asignación realizada correctamente.');
        } else {
            return redirect()->to(base_url('/AsignaturaLogro'))->with('mensajeError', 'Ha ocurrido un error al realizar la asignación.');
        }
    }

    public function obtenerDatosTabla(){
        $asignaturaLogroModel = new AsignaturaLogroModel();

        $datosTabla = $asignaturaLogroModel->select('asignaturalogro.id_asignatura_logro, asignaturalogro.porcenteje, asignaturalogro.periodo, asignaturalogro.curso_asignatura_id, asignaturalogro.logro_id, cursosasignatura.curso_id, cursosasignatura.asignatura_id, logro.nombre_logro')
            ->join('cursosasignatura', 'cursosasignatura.id_curso_asignatura = asignaturalogro.curso_asignatura_id')
            ->join('logro', 'logro.id_logro = asignaturalogro.logro_id')
            ->findAll();

        return $datosTabla;
    }
    
}