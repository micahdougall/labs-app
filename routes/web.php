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

use App\Http\Controllers\PersonController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('robot');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::resource('people', PersonController::class)->middleware('throttle:5,2');

Route::get('/route', fn () => view('route'));
//Route::post('/test', fn () => view('test'));
