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
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->editorial = $request->input('editorial');
        $producto->save();
        return redirect()->route('listado');
    }

    public function ActualizarForm(){
        $editorial = Editorial::all();
        return view('form_actualizar', compact('editorial'));
    }

    public function Actulizar(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoP');

        return view('form_registro');
    }
}
