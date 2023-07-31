<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'loginController::index');

//lucho




//niko
//menuCursos







//victor
$routes->get('/menuDS', 'CreateDS::index');
$routes->get('listarProfesores', 'ProfesoresController::index');
$routes->match(['get','post'], 'crearProfesor', 'ProfesoresController::crear');
$routes->post('guardarProfesor', 'ProfesoresController::guardarProfesor');
$routes->match(['get', 'post'], 'editarProfesores', 'ProfesoresController::editar');
$routes->post('actualizarProfesor', 'ProfesoresController::actualizarProfesor');
$routes->get('/AsignaturaCursos', 'AsignaturaCursosController::index');
$routes->post('/agregarDatosSelect', 'AsignaturaCursosController::agregarDatosSelect');
$routes->post('/AsignaturaCursosGuardarEdicion', 'AsignaturaCursosController::guardarEdicion');
$routes->post('/inactivarActivarRegistroAC', 'AsignaturaCursosController::inactivarActivarRegistro');





















//angela
//loginController
$routes->post('/loggin', 'loginController::login');
$routes->get('/logout', 'loginController::salir');
//homecontroller
$routes->get('/inicio', 'home::index');
//registerControler
$routes->get('/usuarios', 'registerController::index');
$routes->get('/register', 'registerController::register');
$routes->post('/registrar', 'registerController::registrar');
$routes->post('/editUser', 'registerController::editUser');
$routes->post('/editUserSave', 'registerController::editUserSave');
$routes->Post('/activeUser', 'registerController::activeUser');
//estudiantesController
$routes->get('/Estudiantes', 'EstudiantesController::index');
$routes->get('/NuevoEstudiante', 'EstudiantesController::newStudent');
$routes->Post('/buscarEstudiante', 'EstudiantesController::searchStudent');
$routes->Post('/NuevoEstudianteGuardar', 'EstudiantesController::newStudentSave');
$routes->Post('/EditarEstudiante', 'EstudiantesController::editStudent');
$routes->Post('/ActualizarEstudiante', 'EstudiantesController::editStudentSave');

























if (session('rol') == 'docente') {
    $routes->get('/prueba', 'loginController::prueba');
} 






if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
