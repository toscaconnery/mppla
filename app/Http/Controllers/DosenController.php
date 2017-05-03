<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorium;
use App\Dosen;
use DB;
use App\Input;

class DosenController extends Controller
{
    //
    public function tambahkan_dosen()
    {
    	$this->data['laboratorium'] = DB::select('SELECT nama_lab, id FROM laboratorium');
    	return view('Dosen\tambah-dosen', $this->data);
    }

    public function store_dosen(Request $request)
    {
    	$dosen = new Dosen;
    	$dosen->id_lab = $request->get('id_lab');
    	$dosen->nip = $request->get('nip');
    	$dosen->nama = $request->get('nama');
    	$dosen->email = $request->get('email');
    	$dosen->no_hp = $request->get('no_hp');
    	$dosen->alamat = $request->get('alamat');
    	$dosen->save();
    	return redirect('home');
    }
}
