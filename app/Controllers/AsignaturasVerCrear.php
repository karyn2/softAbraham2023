<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AsignaturasVerCrear extends BaseController
{
    public function index()
    {
        return view('asignaturas/principal');
    }
}
