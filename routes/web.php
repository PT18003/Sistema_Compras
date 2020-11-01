<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\areatrabajoController;
use App\Http\Controllers\departamentoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('empleados', [empleadoController::class,'index']);
Route::get('empleados/create', [empleadoController::class,'create']);
Route::get('empleados/{empleado}', [empleadoController::class,'show']);
//ruta para mostrar 
Route::get('areatrabajos', [areatrabajoController::class,'index'])->name('areatrabajos.index');
//ruta para la pagina y para guardar 
Route::get('areatrabajos/create', [areatrabajoController::class,'create'])->name('areatrabajos.create');
Route::post('areastrabajos',  [areatrabajoController::class,'guardar'])->name('areatrabajos.guardar');
//ruta para la pagina y para actualizar
Route::get('areatrabajos/{id}/edit', [areatrabajoController::class,'edit'])->name('areatrabajos.edit');
Route::put('areastrabajos/{id}', [areatrabajoController::class,'actualizar'])->name('areatrabajos.actualizar');

//enlanzando rutas con las vistas para la tabla Departamento
        //[nombre en la url]              [nombre de la funcion en la clase controller]       [carpeta.nombre]
Route::get('departamentos', [departamentoController::class,'index'])->name('departamentos.index');
//vista para agregar un departamento
Route::get('departamentos/create', [departamentoController::class,'create'])->name('departamentos.create');
//no importa si tiene la misma ruta que el index, ya que usa el post, no el get, y en el formulario esta el post
Route::post('departamentos', [departamentoController::class,'guardar'])->name('departamentos.guardar');
//vitas para editar un departamento
//                         {[nombre de la variable]}
Route::get('departamentos/{departamento}/edit', [departamentoController::class,'edit'])->name('departamentos.edit');
//creando la ruta para el formulario de editar con put(es mejor usarlo, segun laravel)
Route::put('departamentos/{departamento}', [departamentoController::class,'actualizar'])->name('departamentos.actualizar');
//usando metodo delete para eliminar, la url puede ser iguala la de un get, put
//Route::delete('departamentos/{departamento}', [departamentoController::class,'destroy'])->name('departamentos.destroy');
//Usando metodo get, para eliminar, la url tiene que ser diferente. 
Route::get('departamentos/delete/{departamento}/', [departamentoController::class,'destroy'])->name('departamentos.destroy');
