<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
    	$ktp = \App\ktp::all();
    	return view('welcome', ['ktp' => $ktp]);
    }
}
