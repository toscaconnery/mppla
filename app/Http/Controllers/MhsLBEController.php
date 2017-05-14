<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsLBEController extends Controller
{
    public function lihattugas()
    {
    	return view('mhslbe\lihattugas');
    }

    public function submitprogres()
    {
    	return view('mhslbe\submitprogres');
    }

    public function historiprogres()
    {
    	return view('mhslbe\histori');
    }

    public function unduhmodul()
    {
    	return view('mhslbe\downloadmodul');
    }
}
