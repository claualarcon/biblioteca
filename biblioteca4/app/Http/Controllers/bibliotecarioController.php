<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bibliotecarioController extends Controller
{

	public function __construct(){

		$this->middleware('EsBiblio');
	}

    public function index(){

    	return "Sos bibliotecario/a";

    }
}
