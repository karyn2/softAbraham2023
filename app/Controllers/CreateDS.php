<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CreateDS extends BaseController
{
    public function index()
    {
        return view('createDocentsAndStudents/menuDocentsAndStudents');
    }

    //--------------------------------------------------------------------

    public function newDocent()
    {
        return view('createDocentsAndStudents/newDocent');
    }
}
