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

    public function list_dosen()
    {
        $query = 'SELECT d.*, l.nama_lab FROM dosen d, laboratorium l
                WHERE d.id_lab = l.id';
        $data = DB::select($query);
        $dosen = array();
        foreach($data as $list) {
            $this->data['lab'][$list->id_lab]['id'] = $list->id_lab;
            $this->data['lab'][$list->id_lab]['namaLab'] = $list->nama_lab;
            $this->data['dosen'][$list->id_lab][$list->nip]['nama'] = $list->nama;
            $this->data['dosen'][$list->id_lab][$list->nip]['nip'] = $list->nip;
            $this->data['dosen'][$list->id_lab][$list->nip]['email'] = $list->email;
            $this->data['dosen'][$list->id_lab][$list->nip]['no_hp'] = $list->no_hp;
            $this->data['dosen'][$list->id_lab][$list->nip]['alamat'] = $list->alamat;
        }
        // dd($this->data['lab']);
        return view('Dosen\list-dosen', $this->data);
    }

    public function detail_dosen($id)
    {
        $this->data['dosen'] = DB::select('SELECT * FROM dosen WHERE id = '.$id)[0];
        //dd($this->data['dosen']);
        return view('Dosen\detail-dosen', $this->data);
    }
}
