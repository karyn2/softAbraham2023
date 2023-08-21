<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsignaturaVerCrear;

class AsignaturasVerCrear extends BaseController
{
    public function index()
    {
        $asignaturas =new AsignaturaVerCrear();
        $data = $asignaturas->findAll();
        $data =['data'=> $data];
        return view('asignaturas/principal', $data);
    }

    public function regAsignatura(){

        return view('asignaturas/regAsignatura');
    }
    public function registrar(){
        $asignaturas = new AsignaturaVerCrear();
        $data = [
            'area_asignatura'=> $this->request->getPost('area'),
            'descripcion_asignatura'=> $this->request->getPost('descripcion')
        ];
        $asignaturas->insert($data);
        return redirect()->to(base_url().'Asignaturas');
    }
    public function form_editar($id)
    {
        $asignaturas = new AsignaturaVerCrear();
        $data = $asignaturas->find($id);
        $data = ['data' => $data];
        return view('asignaturas/editar', $data);

    }
    public function editar()
    {
        $asignaturas = new AsignaturaVerCrear();
        $data = [
            'area_asignatura'=> $this->request->getPost('area'),
            'descripcion_asignatura'=> $this->request->getPost('descripcion')
        ];
        $asignaturas->update($this->request->getPost('id_asig'), $data);
        return redirect()->to(base_url().'Asignaturas');
    }

}
