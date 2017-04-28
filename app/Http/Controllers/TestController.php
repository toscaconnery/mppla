<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

//Created by tosca just for testing

class TestController extends Controller
{
    public function index() {
    	$this->data['namauser'] = Auth::user()->name;
    	dd($this->data['namauser']);
    	return view('index2', $this->data);
    }
}
