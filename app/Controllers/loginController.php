<?php

namespace App\Controllers;

class loginController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
}