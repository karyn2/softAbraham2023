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
}
