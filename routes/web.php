<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('labs2/string', function () {
    return view('route', [
        'route' => new App\Models\Route('Route 1', 'This is a string.')
    ]);
});

Route::get('labs2/var/{route}', function ($route) {
    return view('route', [
        'route' => new App\Models\Route('Route 2',
        "This is a variable from the URL: {$route}.")
    ]);
});

Route::get('labs2/twovars/{var1}/{var2}', function ($var1, $var2) {
    return view('route', [
        'route' => new App\Models\Route('Route 2',
            "These are two variables from the URL: {$var1}, {$var2}.")
    ]);
});

