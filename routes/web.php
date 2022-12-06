<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/contacto', function (){
    return view('pags.contacto');
});
Route::get('/mensaje', function (){
Route::get('/login', [AuthController::class,'login']);
Route::get('/registro', [AuthController::class,'registro']);
Route::post('/registro-usuario', [AuthController::class,'registroUsuario'])->name('registro-usuario');
Route::post('/login-usuario', [AuthController::class,'loginUsuario'])->name('login-usuario');
Route::get('/dashboard', [AuthController::class,'dashboard'])->middleware('isLogged');
Route::get('/logout', [AuthController::class,'logout']);

});
    return view('pags.mensajes');
Route::get('/quienes-somos', function (){

    return view('pags.quienes');
});