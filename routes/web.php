<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MensajeController;

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
Route::get('/', function (){
    return view('starter');
});
Route::get('/quienes-somos', function (){
    return view('pags.quienes');
});
Route::get('/productos', function (){
    return view('pags.productos');
});
Route::get('/contacto', function (){
    return view('pags.contacto');
});

Route::get('/login', [AuthController::class,'login'])->middleware('alreadyLogged');
Route::get('/registro', [AuthController::class,'registro'])->middleware('alreadyLogged');
Route::post('/registro-usuario', [AuthController::class,'registroUsuario'])->name('registro-usuario');
Route::post('/login-usuario', [AuthController::class,'loginUsuario'])->name('login-usuario');
Route::get('/starter', [AuthController::class,'starter']);
Route::get('/logout', [AuthController::class,'logout']);

Route::get('/login', function (){
    return view('auth.login');
});
Route::get('/registro', function (){
    return view('auth.registro');
});
route::resource('mensajes', MensajeController::class);
