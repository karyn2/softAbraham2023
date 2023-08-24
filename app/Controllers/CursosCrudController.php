<?php

namespace App\Controllers;
use App\Models\CursoModel;

class CursosCrudController extends BaseController
{
    public function index()
    {
        $curso = new CursoModel();
       $data = $curso->findAll();
       $data =['data' => $data];
        return view('CursosCrud\listarcursos', $data);
       
    }
    public function nuevoCurso(){
        return view('CursosCrud\newcurso' );
    }

    public function registrarCurso()
    {
        $cursoModel = new CursoModel();
        $data = [
            'nombre_curso' => $this->request->getPost('nombre_curso'),
            'tipo_curso' => $this->request->getPost('tipo_curso'),
            'estado_curso'=> $this->request->getPost('estado_curso')
        ];
        $cursoModel->insert($data);
        return redirect()->to(base_url().'cursos');
    }
}
