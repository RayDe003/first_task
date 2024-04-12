<?php

use Src\Route;

Route::add(['GET', 'POST'], '/hello', [Controller\Site::class,'newLibrarian'])
    ->middleware('admin');
//Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/go', [Controller\Site::class, 'go']);
Route::add('GET', '/libAdd', [Controller\Site::class, 'libAdd']);