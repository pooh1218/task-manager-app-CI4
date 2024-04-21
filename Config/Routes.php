<?php
namespace Config;

$routes = Services::routes();
$routes->group('', ['namespace' => 'App\Modules\Materials\Controllers'], static function($routes){
    $routes->get('materials', 'Materials::index');
    $routes->get('materials/add', 'Materials::add');
    $routes->get('materials/edit/(:segment)', 'Materials::edit/$1');
    $routes->get('materials/view/(:segment)', 'Materials::view/$1');
    $routes->post('materials/store', 'Materials::store');
    $routes->get('materials/delete/(:segment)', 'Materials::delete/$1');
});