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


Route::get('/cadastro', function () {
    return view('paginas.cidadao.cadastro');
})->name('cadastro');

Route::get('sair', [Controller::class, 'logout'])->name('logout');

//Rota do painel
Route::get('/painel', function () {
    return view('paginas.painel');
})->middleware('auth')->name('painel');

//Rota de listagem dos atendimentos
Route::get('/atendimentos', function () {
    return view('paginas.atendimento.atendimentos');
})->middleware('auth')->name('atendimentos');

//Rota de detalhe do atendimento
Route::get('/detalhe/atendimento/{atendimento}', function () {
    return view('paginas.atendimento.detalhe');
})->middleware('auth')->name('detalhe.atendimento');

//Rota de prescrições
Route::get('/prescricoes', function () {
    return view('paginas.prescricao.prescricoes');
})->middleware('auth')->name('prescricoes');

//Rota de prescrições
Route::get('/agendamentos', function () {
    return view('paginas.agendamento.agendamentos');
})->middleware('auth')->name('agendamentos');

//Rota de prescrições
Route::get('/novo/agendamento', function () {
    return view('paginas.agendamento.novo_agendamento');
})->middleware('auth')->name('novo_agendamento');

Route::get('perfil', [Controller::class, 'perfil'])->name('perfil');

Route::get('redefinir_senha', function () {
    return view('paginas.cidadao.esqueci_senha');
})->name('esqueci_senha');
