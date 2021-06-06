<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampeonesController;
use App\Http\Controllers\HabilidadesController;

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
    return view('auth.login');
});

//Route::get('/campeon', function () {
//    return view('campeon.index');
//});

//Route::get('/habilidad', function () {
//    return view('habilidad.index');
//});

//Route::get('campeon/create',[CampeonesController::class,'create']);
//Route::get('habilidad/create',[HabilidadesController::class,'create']);

Route::resource('campeon', CampeonesController::class)->middleware('auth');
Route::resource('habilidad', HabilidadesController::class)->middleware('auth');

Auth::routes(['register'=>true,'reset'=>false]);

Route::get('/home', [CampeonesController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [CampeonesController::class, 'index'])->name('home');    
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
