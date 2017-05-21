<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsLBEController extends Controller
{
    public function lihattugas()
    {
        $this->data['tugas'] = DB::select('SELECT t.* 
                                            FROM tugas_lbe t
                                            WHERE id_proyek = '1);
    	return view('mhslbe\lihattugas');
    }

    public function submitprogres()
    {
    	return view('MhsLbe\submitprogres');
    }

    public function historiprogres()
    {
    	return view('MhsLbe\histori');
    }

    public function unduhmodul()
    {
    	return view('MhsLbe\downloadmodul');
    }
}
