<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibrosController extends Controller
{
    public function Libros(){
        $libro = Libro::all();
    	return view('libros',['libro' => $libro]);
    }

    public function RegistroForm(){
        $editorial = Editorial::all();
        return view('form_registro', compact('editorial'));
    }

    public function Registro(Request $request){
        $libro = new Libro();
        $libro->isbn = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('stock');
        $libro->editorial = $request->input('editorial');
        $libro->save();
        return redirect()->route('listado');
    }

    public function ActualizarForm(){
        $editorial = Editorial::all();
        return view('form_actualizar', compact('editorial'));
    }

    public function Actulizar(Request $request){
        $libro = new Libro();
        $libro->isbn = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('stock');
        $libro->editorial = $request->input('editorial');
        $libro->save();
        return redirect()->route('listado');
    }
}
