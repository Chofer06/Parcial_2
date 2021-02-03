<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function Libros(){
    	return view('libros');
    }
}
