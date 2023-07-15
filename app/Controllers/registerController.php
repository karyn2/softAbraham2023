<?php

namespace App\Controllers;

class registerController extends BaseController
{
    public function index()
    {
        return view('auth\register');
    }
}
