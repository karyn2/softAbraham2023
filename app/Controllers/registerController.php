<?php

namespace App\Controllers;
use App\Models\usuarios;

class registerController extends BaseController
{
    public function index()
    {
       $usuario = new usuarios();
       $data = $usuario->where('estado', true)->findAll();
       $data =['data' => $data];
        return view('auth\userList', $data);
    }

    public function register()
    {
        return view('auth\register');
    }

    public function registrar(){
        try{
            $usuario = new usuarios();
            $documento = $this->request->getPost('documento');
            $correo = $this->request->getPost('correo');

            // Verificar si el número de documento ya existe
            $existeDocumento = $usuario->where('documento', $documento)->first();
            if ($existeDocumento) {
                return redirect()->to(base_url('/register'))->with('mensajeError', 'El número de documento ya está registrado');
            }

            // Verificar si el correo ya existe
            $existeCorreo = $usuario->where('correo', $correo)->first();
            if ($existeCorreo) {
                return redirect()->to(base_url('/register'))->with('mensajeError', 'El correo ya está registrado');
            }

            // Si no existen duplicados, proceder con el registro
            $data=[
                'documento' => $documento,
                'nombre' => $this->request->getPost('nombre'),
                'correo' => $correo,
                'contrasenia' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'rol' => $this->request->getPost('rol'),
                'estado' => true
            ];
    
            $usuario->insert($data);
            return redirect()->to(base_url('/usuarios'))->with('mensaje', 'Usuario creado con éxito');
        }
        catch(Exception $e){
            return redirect()->to(base_url('/usuarios'))->with('mensajeError', 'Ha ocurrido un error, usuario no creado');
        }
    }
}
