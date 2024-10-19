<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbPetController;

//para visualizar as paginas

Route::get('/',[TbPetController::class,'MostrarHome'])->name('home-adm');

Route::get('/cadastro-pet',[TbPetController::class,'MostrarCadastroPet'])->name('show-cadastro-pet');
Route::get('/lista-pet',[TbPetController::class,'MostrarPetNome'])->name('lista-pet');
Route::get('/alterar-pet/{id}',[TbPetController::class,'MostrarPetCodigo'])->name('show-altera-pet');


//para cadastrar
Route::post('/cadastro-pet',[TbPetController::class,'CadastrarPet'])->name('cadastra-pet');

//para deletar
Route::delete('/apaga-pet/{id}',[TbPetController::class,'Destroy'])->name('apaga-pet');

//alterar
Route::put('/alter-pet/{id}',[TbPetController::class,'Update'])->name('altera-pet');


