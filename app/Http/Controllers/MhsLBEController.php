<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsLBEController extends Controller
{
    public function lihattugas()
    {
    	return view('mhslbe\lihattugas');
    }
}
