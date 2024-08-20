<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Rotas ControllerCampeonato
Route::get('/campeonato', [App\Http\Controllers\ControllerCampeonato::class, 'index'])->name('exibeCampeonatos');
Route::get('/campeonato/novo', [App\Http\Controllers\ControllerCampeonato::class, 'create'])->name('novoCampeonato');
Route::post('/campeonato', [App\Http\Controllers\ControllerCampeonato::class, 'store'])->name('gravaNovoCampeonato');
Route::get('/campeonato/edit', [App\Http\Controllers\ControllerCampeonato::class, 'edit'])->name('editarCampeonato');
Route::post('/campeonato/{id}', [App\Http\Controllers\ControllerCampeonato::class, 'update'])->name('atualizaCampeonato');
Route::get('/campeonato/apagar/{id}', [App\Http\Controllers\ControllerCampeonato::class, 'destroy'])->name('deletaCampeonato');

//Rotas ControllerTime
Route::get('/time', [App\Http\Controllers\ControllerTime::class, 'index'])->name('exibeTimes');
Route::get('/time/novo', [App\Http\Controllers\ControllerTime::class, 'create'])->name('novoTime');
Route::post('/time', [App\Http\Controllers\ControllerTime::class, 'store'])->name('gravaNovoTime');
Route::get('/time/edit', [App\Http\Controllers\ControllerTime::class, 'edit'])->name('editarTime');
Route::post('/time/{id}', [App\Http\Controllers\ControllerTime::class, 'update'])->name('atualizaTime');
Route::get('/time/apagar/{id}', [App\Http\Controllers\ControllerTime::class, 'destroy'])->name('deletaTime');

//Rotas ControllerJogador
Route::get('/jogador', [App\Http\Controllers\ControllerJogador::class, 'index'])->name('exibeJogadores');
Route::get('/jogador/novo', [App\Http\Controllers\ControllerJogador::class, 'create'])->name('novoJogador');
Route::post('/jogador', [App\Http\Controllers\ControllerJogador::class, 'store'])->name('gravaNovoJogador');
Route::get('/jogador/edit', [App\Http\Controllers\ControllerJogador::class, 'edit'])->name('editarJogador');
Route::post('/jogador/{id}', [App\Http\Controllers\ControllerJogador::class, 'update'])->name('atualizaJogador');
Route::get('/jogador/apagar/{id}', [App\Http\Controllers\ControllerJogador::class, 'destroy'])->name('deletaJogador');

//Rotas ControllerTimeCampeonato
Route::get('/timescampeonato/detalhes/{id}', [App\Http\Controllers\ControllerTimeCampeonato::class, 'index'])->name('exibeTimesCampeonato');