<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view('genero.view', compact('generos'));
    }
    public function create()
    {
        return view('genero.create');
    }
    public function guardar(Request $request)
    {
        $genero = New Genero();
        $genero->genero = $request->genero;
        $genero->save();
        return redirect()->route('generos.index');
    }
    public function edit(Genero $genero)
    {
        return view('genero.edit', compact('genero'));
    }
    public function actualizar(Request $request, Genero $genero)
    {
        $genero->genero = $request->genero;
        $genero->save();
        return redirect()->route('generos.index');
    }
    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index'); 
    }

}
