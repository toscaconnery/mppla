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

    public function store_tambahkan_dosen(Request $request)
    {
    	$dosen = new Dosen;
    	$dosen->nip = $request->get('nip');
    	$dosen->nama = $request->get('nama');
    	$dosen->email = $request->get('email');
    	$dosen->no_hp = $request->get('no_hp');
    	$dosen->alamat = $request->get('alamat');
    	$dosen->save();
    	return redirect('home');
    }

    public function list_dosen()
    {
        $this->data['dosen'] = DB::select('SELECT d.* FROM dosen d');

        return view('Dosen\list-dosen', $this->data);
    }

    public function detail_dosen($id)
    {
        $this->data['dosen'] = DB::select('SELECT * FROM dosen WHERE id = '.$id)[0];
        
        return view('Dosen\detail-dosen', $this->data);
    }

    public function edit_dosen($id)
    {
        $this->data['dosen'] = DB::select('SELECT * FROM dosen WHERE id = '.$id)[0];

        return view('Dosen\edit-dosen', $this->data);
    }

    public function update_dosen(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->nama = $request->get('nama');
        $dosen->nip = $request->get('nip');
        $dosen->email = $request->get('email');
        $dosen->no_hp = $request->get('no_hp');
        $dosen->alamat = $request->get('alamat');
        $dosen->save();

        return redirect('list-dosen');
    }
}
