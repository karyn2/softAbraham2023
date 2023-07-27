<?php

namespace App\Controllers;
use App\Models\DatosInstitucionModel;

class DatosInstController extends BaseController
{
    public function index()
    {
        return view('datosInstitucion\infoInstitucion');
    }

    public function newInformation()
    {
        return view('datosInstitucion\newInfo');
    }

    public function guardarDatos() {

        try{

            $datosInstitucionModel = new DatosInstitucionModel();
            $datos = [
                'codigoDane' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'eslogan' => $this->request->getPost('eslogan'),
                'periodo' => $this->request->getPost('periodo'),
                'telefono' => $this->request->getPost('telefono'),
                'correo' => $this->request->getPost('correo'),
                'direccion' => $this->request->getPost('direccion'),
                'jornada' => $this->request->getPost('jornada'),
                'mision' => $this->request->getPost('mision'),
                'vision' => $this->request->getPost('vision')
           
            ];
    
            $datosInstitucionModel->insert($datos);
    
            return redirect()->to(base_url('/Institucion'))->with('mensaje', 'Datos registrados correctamente');
        }
        catch(Exception $e){
            return redirect()->to(base_url('/Institucion'))->with('mensajeError', 'Ha ocurrido un error, Datos no agregados');
        }

        
    }
}
