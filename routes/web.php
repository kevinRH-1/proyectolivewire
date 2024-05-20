<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\VerClientes;
use App\Http\Controllers\Controller;
use App\Livewire\Regiscliente;
use app\Models\Cliente;
use Illuminate\Auth\Events\Verified;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[Controller::class,'dashboard'])->name('welcome');

Route::get('livewire',[VerClientes::class,'render',])->name('cliente');
Route::get('livewire/regiscliente',[Regiscliente::class,'render',])->name('cliente.regis');

