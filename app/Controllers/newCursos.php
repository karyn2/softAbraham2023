<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class newCursos extends BaseController
{
    public function nuevosCursos()
    {
        return view('configCursos/newCursos');
    }
    public function cursoPrimaria()
    {
        return view('configCursos/newCursosPrimaria');
    }
    public function cursoBachillerato()
    {
        return view('configCursos/newcursosBachillerato');
    }

}