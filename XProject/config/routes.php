<?php

use App\Controller\EmployeeController;

$router->get('/', [EmployeeController::class, 'index']);
$router->get('/employee/add', [EmployeeController::class, 'add']);
$router->post('/employee/add', [EmployeeController::class, 'store']);
$router->get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
$router->post('/employee/edit/{id}', [EmployeeController::class, 'update']);
$router->get('/employee/delete/{id}', [EmployeeController::class, 'delete']);