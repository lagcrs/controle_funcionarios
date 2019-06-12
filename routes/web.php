<?php

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/funcionario', 'FuncionariosController@index')->name('listar_funcionarios');
Route::get('/funcionario/cadastrar', 'FuncionariosController@create')->name('cadastrar_funcionario');
Route::post('/funcionario/cadastrar', 'FuncionariosController@store');
Route::post('/funcionario/remover/{id}', 'FuncionariosController@destroy');

Route::get('/cargo', 'CargosController@index')->name('listar_cargos');
Route::get('/cargo/cadastrar', 'CargosController@create')->name('cadastrar_cargos');
Route::post('/cargo/cadastrar', 'CargosController@store');
Route::post('/cargo/{id}/editarCargo', 'CargosController@editarCargo');
Route::post('/cargo/remover/{id}', 'CargosController@destroy');
