<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('tarefa/exportacao/{extensao}', 'App\Http\Controllers\TarefaController@exportacao')->name('tarefa.exportacao');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');

Route::get('/mensagem-test' , function(){
    return new MensagemTesteMail();
});
