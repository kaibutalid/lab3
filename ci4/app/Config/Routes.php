<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Comments;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Kai;

$routes->get('kai', [Kai::class, 'main']); // About me page

$routes->get('comments', [Comments::class, 'index']);
$routes->get('comments/new', [Comments::class, 'new']); 
$routes->post('comments', [Comments::class, 'create']);          
$routes->get('comments/(:segment)', [Comments::class, 'show']);

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;