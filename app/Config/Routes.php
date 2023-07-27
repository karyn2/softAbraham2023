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
$routes->get('/nuevosCursos', 'newCursos::nuevosCursos');
$routes->get('/CursosPrimaria', 'newCursos::cursoPrimaria');
$routes->get('/CursosBachillerato', 'newCursos::cursoBachillerato');




//victor
//$routes->get('/menuDS', 'CreateDS::index');
//$routes->get('/newDocent', 'CreateDS::newDocent');












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
//DatosInstituciónControler
$routes->get('/Institucion', 'DatosInstController::index');
$routes->get('/DatosInstitucion', 'DatosInstController::newInformation');
$routes->Post('/SaveData', 'DatosInstController::guardarDatos');


$routes->get('/menuDS', 'CreateDS::index');
$routes->get('/newDocent', 'CreateDS::newDocent');
$routes->get('/listDocent', 'CreateDS::listDocent');


//ruta de prueba

if (session('rol') == 'docente') {
    $routes->get('/prueba', 'loginController::prueba');
}

// if (session('rol') == 'administrador') {
//     $routes->get('/prueba', 'loginController::prueba');
//     $routes->get('/menuDS', 'CreateDS::index');
//     $routes->get('/newDocent', 'CreateDS::newDocent');
//     $routes->get('/listDocent', 'CreateDS::listDocent');
// } else{
    
//     $routes->post('/loggin', 'loginController::login');
// }


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
