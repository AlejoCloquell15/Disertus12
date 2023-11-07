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

// Controlador: datosDispositivo
$routes->post('/datosDispositivo', 'datosDispositivo::datosDispositivo'); //Recibe los datos de tiempo y los guarda en db
$routes->post('/cargarNodemcu', 'datosDispositivo::cargarNodemcu'); // Consulta los dispositvos del usuario y los envia a la vista
$routes->get('/cargarNodemcu', 'datosDispositivo::cargarNodemcu');
$routes->post('/cargarSpConf', 'datosDispositivo::cargarSpConf'); // Carga la vista de configuracion y consulta los tiempos
$routes->get('/cargarSpConf', 'datosDispositivo::cargarSpConf');
$routes->post('/cargarAgregarNodemcu', 'datosDispositivo::cargarAgregarNodemcu'); // Carga la vista para vuncular nuevo dispositivo
$routes->post('/agregarNodemcu', 'datosDispositivo::agregarNodemcu'); // Recibe los datos, verifica si existe la mac y la inserta o devuelve error

// Controlador: Home
$routes->get('/', 'Home::index'); // Carga la pagina principal
$routes->get('/cargarSob', 'Home::cargarSob'); //Carga la pagina de sobre nosotros de usuario
$routes->get('/cargarMan', 'Home::cargarMan'); //Carga la pagina de manual de usuario
$routes->get('/cargarUsu', 'Home::cargarConfUsu'); //Carga la pagina de configuracion de usuario
$routes->get('/sobreNosotros', 'Home::sobreNosotros'); //Carga la pagina de sobre nosotros de la landing page
$routes->get('/manual', 'Home::manual'); //Carga la pagina de manual de la landing page

// Controlador: registrar
$routes->get('/registrar', 'registrar::registrar'); // Carga la vista de registro
$routes->post('/ingresarDatos', 'registrar::ingresarDatos'); // Recibe los datos, lo valida, comprara la mac, si es permitido, registra el usuario y vincula la mac. Luego crea el token, la fecha de expiracion y lo inserta todo.
$routes->get('/ingresarDatos', 'registrar::ingresarDatos');

// Controlador: login
$routes->get('/cargarLogin', 'login::cargarLogin'); // Carga la vista de logeo
$routes->post('/login', 'login::login'); // Logea al usuario. Recibe los datos, los valida, hashea la pass, compara el mail, genera el token, la fecha de expiracion, lo guarda en la bd y en la variable de session al igual que el id del usuario.
$routes->post('/cerrarSession', 'login::cerrarSession'); // Eliminar el token de la bd y las variables de session
$routes->get('/cerrarSession', 'login::cerrarSession');
$routes->post('/editarNombre', 'login::editarNombre'); // Permite editar el nombre de usuario
$routes->post('/editarCorreo', 'login::editarCorreo'); // Permite correo el nombre de usuario
$routes->post('/botonesConfUsu', 'login::botonesConfUsu'); // Verifica cual es el boton apretado. Si es el de cambair pass, elimina la session y te redirecciona a cambiar pass. Si el el de cerrar session te redirije a la funcion que cierra la session.
$routes->post('/eliminarCuenta', 'login::eliminarCuenta'); // Elimina completamente la cuenta de usuario y la vinculacion con el dispositivp
$routes->get('/eliminarCuenta', 'login::eliminarCuenta');

// Controlador: paginaPrincipal
$routes->get('/cargarPp', 'paginaPrincipal::cargarPp'); // Consulto el cuadal total y el caudal por dia para graficar los datos, luego cargo la vista de pagina principal de usuario

// Controlador: recibirNodemcu
$routes->get('/recibirNodemcu/(:any)', 'recibirNodemcu::recibirDatos'); // Recibe los tiempos de ducha desde la nodemcu
$routes->post('/recibirNodemcu', 'recibirNodemcu::recibirDatos');
$routes->get('/recibir_caudalimetro/(:any)', 'recibirNodemcu::recibirCaudalimetro'); //Recibe el cuadal desde la nodemcu
$routes->post('/recibir_caudalimetro', 'recibirNodemcu::recibirCaudalimetro');
$routes->get('/recibirMAC/(:any)', 'recibirNodemcu::recibirMAC'); // Recibe la mac desde la nodemcu
$routes->post('/recibirMAC', 'recibirNodemcu::recibirMAC');

// Controlador recuperarPassword
$routes->get('/enviarCorreo', 'recuperarPassword::correo'); //Envia el correo de recuperacion de password
$routes->post('/enviarCorreo', 'recuperarPassword::correo');
$routes->get('/cargarRecuperacion', 'recuperarPassword::cargarRecuperacion'); //Carga la vista de recuperacion
$routes->post('/enviarCodigo', 'recuperarPassword::enviarCodigo'); //Verifica el boton que se aprieta, si aprieta el envio de codigo, genera el codigo, lo guarada en la bd y envia le mail, si toca el boton de verifica, recibe el codigo, verifica el codigo
$routes->post('/cambiarPassword', 'recuperarPassword::cambiarPassword'); //Edita la nueva pasword

//Controlador: estadisticas
$routes->post('/cargarEst', 'estadisticas::cargarEst'); //Consulta los dispositivos carga la vista
$routes->get('/cargarEst', 'estadisticas::cargarEst');
$routes->post('/cargarSpEst', 'estadisticas::cargarSpEst'); // Consulta los datos del cuadal y los manda a la vista
$routes->get('/cargarSpEst', 'estadisticas::cargarSpEst');
$routes->post('/filtro/(:any)', 'estadisticas::filtro/$1'); // Filtra los datos por dia, mes o year
$routes->get('/filtro/(:any)', 'estadisticas::filtro/$1');




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