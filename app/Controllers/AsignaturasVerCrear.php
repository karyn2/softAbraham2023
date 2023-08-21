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

}
