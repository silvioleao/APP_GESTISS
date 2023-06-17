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
| ->middleware('auth')
*/

Route::get('/', [Controller::class, 'login']);

Route::get('/entrar', function () {
    return view('login');
})->name('login');

Route::get('sair', [Controller::class, 'logout'])->name('logout');

//Rota do painel
Route::get('/painel', function () {
    return view('paginas.painel');
})->name('painel');

//Rota de listagem dos atendimentos
Route::get('/atendimentos', function () {
    return view('paginas.atendimento.atendimentos');
})->name('atendimentos');

//Rota de detalhe do atendimento
Route::get('/detalhe/atendimento/{atendimento}', function () {
    return view('paginas.atendimento.detalhe');
})->name('detalhe.atendimento');

//Rota de prescrições
Route::get('/prescricoes', function () {
    return view('paginas.prescricao.prescricoes');
})->name('prescricoes');

//Rota de prescrições
Route::get('/agendamentos', function () {
    return view('paginas.agendamento.agendamentos');
})->name('agendamentos');

//Rota de prescrições
Route::get('/novo/agendamento', function () {
    return view('paginas.agendamento.novo_agendamento');
})->name('novo_agendamento');
