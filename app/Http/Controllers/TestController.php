<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
    	$this->data['namauser'] = Auth::user();
    	dd($this->data['namauser']);
    	return view('index2', $this->data);
    }
}
