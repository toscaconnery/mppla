<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laboratorium;

class ModulController extends Controller
{
    public function inputmodul()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputmodul',$this->data);
    }
}
