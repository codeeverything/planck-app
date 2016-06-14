<?php

/**
 * Defines the routes to be used by your application
 * 
 * You can use any router, providing the following conventions are followed:
 * 
 * 1) The router must be set into a variable called "$router" in this file
 * 2) A matched route must return an array containing indexes for:
 *     "controller" - The controller to instantiate
 *     "action" (optional) - The [public] method on the controller to call
 *     "vars" (optional) - An array of values to pass to the controller action as arguments
 */
 
use Junction\Router;

// define the router - This can be any router, but it must be set to a variable called "router"
$router = new Router();

// list all todos
$router->add('GET /api/todos', function () {
    return [
        'controller' => 'Todo',
        'action' => 'index',
        'vars' => func_get_args(),
    ];
});

// view a specifc todo
$router->add('GET /api/todos/:id', function ($id) {
    return [
        'controller' => 'Todo',
        'action' => 'view',
        'vars' => func_get_args(),
    ];
});

// add a new todo
$router->add('POST /api/todos', function () {
    return [
        'controller' => 'Todo',
        'action' => 'add',
        'vars' => func_get_args(),
    ];
});

// update a specific todo
$router->add('PUT /api/todos/:id', function ($id) {
    return [
        'controller' => 'Todo',
        'action' => 'edit',
        'vars' => func_get_args(),
    ];
});

// delete a specific todo
$router->add('DELETE /api/todos/:id', function ($id) {
    return [
        'controller' => 'Todo',
        'action' => 'delete',
        'vars' => func_get_args(),
    ];
});