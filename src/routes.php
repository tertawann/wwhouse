<?php


$router->get('/', 'Http\Controllers\Dashboard', 'index');

$router->get('/stock', 'Http\Controllers\Stock', 'index');
$router->get('/stock/create', 'Http\Controllers\Stock', 'create');
$router->post('/stock/create', 'Http\Controllers\Stock', 'store');


$router->get('/stock/products/get', 'Http\Controllers\Stock', 'getProducts');


