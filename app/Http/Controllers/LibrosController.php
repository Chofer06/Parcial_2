<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function Libros(){
        $libro = DB::table('libro')->get();
    	return view('libros',['libro' => $libro]);
    }
}
