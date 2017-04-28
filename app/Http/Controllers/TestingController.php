<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
	public function index() {
		if(\Auth::user()->can('tambahkan-admin')) {
	    	return view('testing');
	    }
	    else {
	    	return view('testing2');
	    }
	}
	    
    
}
