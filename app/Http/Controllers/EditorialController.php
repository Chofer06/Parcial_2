<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    public function Editorial(){
        $editorial = Editorial::all();
    	return view('editorial',['editorial' => $editorial]);
    }
}
