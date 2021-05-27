<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
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

Route::get('/', HomeController::class);

Route::get('proyecto', [ProyectoController::class, 'index'])->name('proyecto.index'); // esta ruta llama a los controladores (index)

Route::get('proyecto/create',[ProyectoController::class, 'create'])->name('proyecto.create');// esta ruta llama a los controladores (create)

Route::post('proyecto', [ProyectoController::class, 'store'])->name('proyecto.store');

Route::get('proyecto/{id}',[ProyectoController::class, 'show'] )->name('proyecto.show');// esta ruta llama a los controladores (show)

Route::get('proyecto/{id}/edit', [ProyectoController::class, 'edit'])->name('proyecto.editar');

//Route::put('proyecto/{id}', [ProyectoController::class, 'update'])->name('Proyecto.update');

Route::put('proyecto/{curso}', [ProyectoController::class,'update'])->name('Proyecto.update');

// para que funciones necesita los controladores ejemplo use App\Http\Controllers\ProyectoController;