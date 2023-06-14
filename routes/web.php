<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'login']);

Route::get('/entrar', function () {
    return view('login');
})->name('login');

Route::get('/painel', function () {
    return view('paginas.painel');
})->middleware('auth')->name('painel');

Route::get('/atendimentos', function () {
    return view('paginas.atendimentos');
})->middleware('auth')->name('atendimentos');
