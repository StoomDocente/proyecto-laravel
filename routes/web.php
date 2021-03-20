<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//formulario de usuarios
Route::get('/form',[UserController::class, 'userform']);
//Guardar usuarios
Route::post('/save',[UserController::class, 'save'])->name('save');
//Listar usuarios
Route::get('/index',[UserController::class, 'list']);
//Eliminar usuarios
Route::delete('/delete/{id}',[UserController::class, 'delete'])->name('delete');