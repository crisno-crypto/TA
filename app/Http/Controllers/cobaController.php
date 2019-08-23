<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobaController extends Controller
{
    
	public function show(Request $request){

		// return view('coba');
		var_dump($request->input());
		// $request->session()->put('')
	}

}