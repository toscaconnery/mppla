<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LBEController extends Controller
{
    public function verif_pinjam()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputtugaslbe',$this->data);
    }
}
