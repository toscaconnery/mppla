<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProyekLab;

class LBEController extends Controller
{
    public function inputtugas()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputtugaslbe',$this->data);
    }

    public function input_tugas(Request $request)
    {
    	$tugaslbe = new ProyekLab;
        $tugaslbe->id_lab = $request->id_lab;
        $tugaslbe->nama_proyek = $request->judul; //kiri database kanan form
        $tugaslbe->keterangan = $request->tugas;

        $tugaslbe->save();
        return redirect('listtugas')->with('message','success');
    }

    public function listtugas()
    {
    	$this->data['listtugas'] = ProyekLab::all();
    	//dd($listtugas);
        return view('admin\listtugas', $this->data);
    }

    public function downloadprogres()
    {
        // $this->data['listtugas'] = ProyekLab::all();
        //dd($listtugas);
        return view('admin\downloadprogres');
    }

    // public function list_tugas()
    // {
    //     $this->data['listtugas'] = ProyekLab::all();
    //     //dd($listtugas);
    //     return view('admin\listtugas', $this->data);
    // }

}
