<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Fasilitas;

class FasilController extends Controller
{
    public function input_fasil()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputfasil',$this->data);
    }

    public function inputfasil(Request $request)
    {
    	$fasil = new Fasilitas;
        $fasil->id_lab = $request->id_lab;
        $fasil->nama_fasil = $request->fasil; //kiri database kanan form
        $fasil->tahun_masuk = $request->tahun;
        $fasil->jumlah = $request->jumlah;
        $fasil->kondisi = $request->kondisi;

        $fasil->save();
        return redirect('listfasil')->with('message','success');
    }

     public function list_fasil()
    {
    	$this->data['listfasil'] = Fasilitas::all();
    	//dd($listtugas);
        return view('admin\listfasil', $this->data);
    }

}
