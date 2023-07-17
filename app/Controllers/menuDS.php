<?php

namespace App\Controllers;

class menuDS extends BaseController
{
    public function index()
    {
        return view('createDocentsAndStudents\menuDocentsAndStudents');
    }
}
