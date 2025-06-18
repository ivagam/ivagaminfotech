<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection
 */

 $routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {  
    $routes->get('/', 'Login::index');      
    $routes->match(['get', 'post'], 'login', 'Login::index');
    $routes->get('logout', 'Logout::index');

    $routes->get('dashboard', 'Dashboard::index');

    $routes->get('blogs', 'Blogs::index');
    $routes->get('blogs/create', 'Blogs::create');
    $routes->post('blogs/store', 'Blogs::store');
    $routes->get('blogs/edit/(:num)', 'Blogs::edit/$1');
    $routes->post('blogs/update/(:num)', 'Blogs::update/$1');
    $routes->get('blogs/delete/(:num)', 'Blogs::delete/$1');

    $routes->get('project', 'Project::index');
    $routes->get('project/create', 'Project::create');
    $routes->post('project/store', 'Project::store');
    $routes->get('project/edit/(:num)', 'Project::edit/$1');
    $routes->post('project/update/(:num)', 'Project::update/$1');
    $routes->get('project/delete/(:num)', 'Project::delete/$1');

    $routes->get('service', 'Service::index');
    $routes->get('service/create', 'Service::create');
    $routes->post('service/store', 'Service::store');
    $routes->get('service/edit/(:num)', 'Service::edit/$1');
    $routes->post('service/update/(:num)', 'Service::update/$1');
    $routes->get('service/delete/(:num)', 'Service::delete/$1');
});

$routes->get('/', 'Home::index');
$routes->get('(:any)', 'Home::index/$1');

$routes->group('operation', function ($routes) {
    $routes->get('', 'Operation::index');
    $routes->get('blog_list', 'Operation::blog_list');
    $routes->match(['get', 'post'], 'add_blog', 'Operation::add_blog');
    $routes->get('edit_blog/(:num)', 'Operation::edit_blog/$1');
    $routes->post('update_blog/(:num)', 'Operation::update_blog/$1');
    $routes->get('delete_blog/(:num)', 'Operation::delete_blog/$1');

    $routes->get('testimonials_list', 'Operation::testimonials_list');
    $routes->match(['get', 'post'], 'add_testimonial', 'Operation::add_testimonial');
    $routes->get('edit_testimonial/(:num)', 'Operation::edit_testimonial/$1');
    $routes->post('edit_testimonial/(:num)', 'Operation::edit_testimonial/$1');
    $routes->get('delete_testimonial/(:num)', 'Operation::delete_testimonial/$1');
});


