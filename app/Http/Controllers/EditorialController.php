<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function Editorial(){
        $editorial = DB::table('editorial')->get();
    	return view('editorial',['editorial' => $editorial]);
    }
}
