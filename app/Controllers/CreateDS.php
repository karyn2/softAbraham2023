<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\usuarios;
use App\Models\DocenteModel;


class CreateDS extends BaseController
{
    public function index()
    {
        return view('createDocentsAndStudents/menuDocentsAndStudents');
    }

    public function newDocent()
    {
        return view('createDocentsAndStudents/newDocent');
    }

    public function listDocent()
    {
        $usuariosModel = new usuarios();
        $dataUsers['dataUsers'] = $usuariosModel
            ->where('rol', 'docente')
            ->where('estado', '1')
            ->findAll();
    
        $docenteModel = new DocenteModel();
        $dataDocentes['dataDocentes'] = $docenteModel->findAll();
    
        return view('createDocentsAndStudents/listDocent', $dataUsers + $dataDocentes);
    }    
}

