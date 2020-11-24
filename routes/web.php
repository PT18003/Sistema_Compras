<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\AreaTrabajoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EstadoCivilController;
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

Route::get('/', function () {return view('welcome');})->name('index');

/* Se pueden usar el metodo resourse para ahorrar lineas de codigo en una sola 
pero hay que usar las convecciones que laravel nos da v: */

//ruta para mostrar 
Route::get('areatrabajos', [AreaTrabajoController::class,'index'])->name('areatrabajos.index');
//ruta para la pagina y para guardar 
Route::get('areatrabajos/create', [AreaTrabajoController::class,'create'])->name('areatrabajos.create');
Route::post('areastrabajos',  [AreaTrabajoController::class,'guardar'])->name('areatrabajos.guardar');
//ruta para la pagina y para actualizar
Route::get('areatrabajos/{id}/edit', [AreaTrabajoController::class,'edit'])->name('areatrabajos.edit');
Route::put('areastrabajos/{id}', [AreaTrabajoController::class,'actualizar'])->name('areatrabajos.actualizar');

//enlanzando rutas con las vistas para la tabla Departamento
        //[nombre en la url]              [nombre de la funcion en la clase controller]       [carpeta.nombre]
Route::get('departamentos', [DepartamentoController::class,'index'])->name('departamentos.index');
//vista para agregar un departamento
Route::get('departamentos/create', [DepartamentoController::class,'create'])->name('departamentos.create');
//no importa si tiene la misma ruta que el index, ya que usa el post, no el get, y en el formulario esta el post
Route::post('departamentos', [DepartamentoController::class,'guardar'])->name('departamentos.guardar');
//vitas para editar un departamento
//                         {[nombre de la variable]}
Route::get('departamentos/{departamento}/edit', [DepartamentoController::class,'edit'])->name('departamentos.edit');
//creando la ruta para el formulario de editar con put(es mejor usarlo, segun laravel)
Route::put('departamentos/{departamento}', [DepartamentoController::class,'actualizar'])->name('departamentos.actualizar');
//usando metodo delete para eliminar, la url puede ser iguala la de un get, put
//Route::delete('departamentos/{departamento}', [DepartamentoController::class,'destroy'])->name('departamentos.destroy');
//Usando metodo get, para eliminar, la url tiene que ser diferente. 
Route::get('departamentos/delete/{departamento}/', [DepartamentoController::class,'destroy'])->name('departamentos.destroy');

//municipios
Route::get('municipios', [MunicipioController::class,'index'])->name('municipios.index');
Route::get('municipios/create',  [MunicipioController::class,'create'])->name('municipios.create');
Route::post('municipios', [MunicipioController::class,'guardar'])->name('municipios.guardar');
Route::get('municipios/{municipio}/edit', [MunicipioController::class,'edit'])->name('municipios.edit');
Route::put('municipios/{municipio}', [MunicipioController::class,'actualizar'])->name('municipios.actualizar');
Route::get('municipios/delete/{municipio}/', [MunicipioController::class,'destroy'])->name('municipios.destroy');

//genero
Route::get('generos', [GeneroController::class,'index'])->name('generos.index');
Route::get('generos/create',  [GeneroController::class,'create'])->name('generos.create');
Route::post('generos', [GeneroController::class,'guardar'])->name('generos.guardar');
Route::get('generos/{genero}/edit', [GeneroController::class,'edit'])->name('generos.edit');
Route::put('generos/{genero}', [GeneroController::class,'actualizar'])->name('generos.actualizar');
Route::get('generos/delete/{genero}/', [GeneroController::class,'destroy'])->name('generos.destroy');
//estadocovil
Route::get('estadosciviles', [EstadoCivilController::class,'index'])->name('estadosciviles.index');
Route::get('estadosciviles/create',  [EstadoCivilController::class,'create'])->name('estadosciviles.create');
Route::post('estadosciviles', [EstadoCivilController::class,'guardar'])->name('estadosciviles.guardar');
Route::get('estadosciviles/{estadocivil}/edit', [EstadoCivilController::class,'edit'])->name('estadosciviles.edit');
Route::put('estadosciviles/{estadocivil}', [EstadoCivilController::class,'actualizar'])->name('estadosciviles.actualizar');
Route::get('estadosciviles/delete/{estadocivil}/', [EstadoCivilController::class,'destroy'])->name('estadosciviles.destroy');
//empleados
Route::get('empleados', [EmpleadoController::class,'index'])->name('empleados.index');
Route::get('empleados/create', [EmpleadoController::class,'create'])->name('empleados.create');
Route::get('empleados/towns/{id}',[EmpleadoController::class,'getTowns'])->name('empleados.getTowns');
Route::get('empleados/etowns/{empleado}',[EmpleadoController::class,'geteTowns'])->name('empleados.geteTowns');
Route::post('empleados',[EmpleadoController::class,'guardar'])->name('empleados.guardar');
Route::put('empleados/{empleado}', [EmpleadoController::class,'actualizar'])->name('empleados.actualizar');
Route::get('empleados/{empleado}/edit', [EmpleadoController::class,'edit'])->name('empleados.edit');
Route::get('empleados/delete/{empleado}/', [EmpleadoController::class,'destroy'])->name('empleados.destroy');
Route::get('empleados/view/{empleado}', [EmpleadoController::class,'view'])->name('empleados.view');

//Articulos_Proveedores
Route::get('articulosProveedores', [ArticulosProveedorController::class,'index'])->name('articulosProveedores.index');
Route::get('articulosProveedores/create', [ArticulosProveedorController::class,'create'])->name('articulosProveedores.create');
Route::post('articulosProveedores',[ArticulosProveedorController::class,'store'])->name('articulosProveedores.store');
Route::put('articulosProveedores/{articuloProveedor}', [ArticulosProveedorController::class,'update'])->name('articulosProveedores.update');
Route::get('articulosProveedores/{articuloProveedor}/edit', [ArticulosProveedorController::class,'edit'])->name('articulosProveedores.edit');
Route::get('articulosProveedores/delete/{articuloProveedor}/', [ArticulosProveedorController::class,'destroy'])->name('articulosProveedores.destroy');