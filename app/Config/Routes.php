<?php

use App\Controllers\Pages;
use App\Controllers\Home;
use App\Controllers\Electric;
use App\Controllers\Temp;
use App\Controllers\Fuel;
use App\Controllers\Layout;
use App\Controllers\Potency;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// route for pages
$routes->get('/', [Pages::class, 'index']);
$routes->get('/temp', [Pages::class, 'temp']);
$routes->get('/electric', [Pages::class, 'electric']);
$routes->get('/fuel', [Pages::class, 'fuel']);
$routes->get('/space', [Pages::class, 'space']);
$routes->get('/potency/(:segment)', [Pages::class, 'potency']);

// route for request data Home Page
$routes->get('/data/home/pue', [Home::class, 'dataPue']);
$routes->get('/data/home/temp', [Home::class, 'dataTemp']);
$routes->get('/data/home/chart', [Home::class, 'dataChart']);

// route for request data Electric Page
$routes->get('/data/electric/value', [Electric::class, 'value']);
$routes->get('/data/electric/chartHour', [Electric::class, 'chartHour']);
$routes->get('/data/electric/chartDay', [Electric::class, 'chartDay']);
$routes->get('/data/electric/chartWeek', [Electric::class, 'chartWeek']);
$routes->get('/data/electric/chartUpdate', [Electric::class, 'chartUpdate']);
$routes->get('/data/electric/download1', [Electric::class, 'downloadOpsi1']);
$routes->get('/data/electric/download2', [Electric::class, 'downloadOpsi2']);

// route for request data Temp Page
$routes->get('/data/temp/perSecond', [Temp::class, 'dataTempSc']);
$routes->get('/data/temp/perMinute/(:segment)', [Temp::class, 'dataTempMn']);

// route for request data Fuel Page
$routes->get('/data/fuel', [Fuel::class, 'dataFuel']);

// route for request data Potency Page
  $routes->get('/data/potency/powerQty', [Potency::class, 'dataQty']);
  // power
  $routes->get('/data/potency/power/(:segment)', [Potency::class, 'getPowerById']);
  $routes->post('/data/potency/powerAdd', [Potency::class, 'addPower']);
  $routes->get('/data/potency/powerDelete/(:segment)', [Potency::class, 'deletePower']);
  $routes->post('/data/potency/powerUpdate/(:segment)', [Potency::class, 'updatePower']);
  // user
  $routes->get('/data/potency/rack/(:segment)', [Potency::class, 'getUserById']);
  $routes->post('/data/potency/rackAdd', [Potency::class, 'addUser']);
  $routes->get('/data/potency/rackDelete/(:segment)', [Potency::class, 'deleteUser']);
  $routes->post('/data/potency/rackUpdate/(:segment)', [Potency::class, 'updateUser']);
  // cooling
  $routes->get('/data/potency/cool/(:segment)', [Potency::class, 'getCoolById']);
  $routes->post('/data/potency/coolAdd', [Potency::class, 'addCool']);
  $routes->get('/data/potency/coolDelete/(:segment)', [Potency::class, 'deleteCool']);
  $routes->post('/data/potency/coolUpdate/(:segment)', [Potency::class, 'updateCool']);
  // fire system
  $routes->get('/data/potency/fire/(:segment)', [Potency::class, 'getFireById']);
  $routes->post('/data/potency/fireAdd', [Potency::class, 'addFire']);
  $routes->get('/data/potency/fireDelete/(:segment)', [Potency::class, 'deleteFire']);
  $routes->post('/data/potency/fireUpdate/(:segment)', [Potency::class, 'updateFire']);
  // Tank
  $routes->get('/data/potency/tank/(:segment)', [Potency::class, 'getTankById']);
  $routes->post('/data/potency/tankAdd', [Potency::class, 'addTank']);
  $routes->get('/data/potency/tankDelete/(:segment)', [Potency::class, 'deleteTank']);
  $routes->post('/data/potency/tankUpdate/(:segment)', [Potency::class, 'updateTank']);
  // Security
  $routes->get('/data/potency/security/(:segment)', [Potency::class, 'getSecurityById']);
  $routes->post('/data/potency/securityAdd', [Potency::class, 'addSecurity']);
  $routes->get('/data/potency/securityDelete/(:segment)', [Potency::class, 'deleteSecurity']);
  $routes->post('/data/potency/securityUpdate/(:segment)', [Potency::class, 'updateSecurity']);
  // Lighting
  $routes->get('/data/potency/light/(:segment)', [Potency::class, 'getLightById']);
  $routes->post('/data/potency/lightAdd', [Potency::class, 'addLight']);
  $routes->get('/data/potency/lightDelete/(:segment)', [Potency::class, 'deleteLight']);
  $routes->post('/data/potency/lightUpdate/(:segment)', [Potency::class, 'updateLight']);
  // Pump System
  $routes->get('/data/potency/pump/(:segment)', [Potency::class, 'getPumpById']);
  $routes->post('/data/potency/pumpAdd', [Potency::class, 'addPump']);
  $routes->get('/data/potency/pumpDelete/(:segment)', [Potency::class, 'deletePump']);
  $routes->post('/data/potency/pumpUpdate/(:segment)', [Potency::class, 'updatePump']);

// route for request data Layout Page
$routes->get('/data/layout/(:segment)', [Layout::class, 'dataLayout']);