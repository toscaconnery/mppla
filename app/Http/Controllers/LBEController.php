<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\ProyekLab;
use App\Lbe;

class LBEController extends Controller
{
    public function inputtugas()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        dd($this->data['id_lab']);
        return view('admin\inputtugaslbe',$this->data);
    }

    public function tambahkan_lbe()
    {

        if(Auth::check())
        {
            $this->data['id_lab'] = Auth::user()->id_lab;
        }
        if(isset($this->data['id_lab']))
        {
            $this->data['adalbe'] = DB::select('SELECT l.id FROM lbe l WHERE l.id_lab = '.$this->data['id_lab'].' AND l.deleted_at IS NULL');
            if(isset($this->data['adalbe'])){
                $this->data['data_lbe'] = DB::select('SELECT l.* FROM lbe l WHERE l.id_lab = '.$this->data['id_lab'])[0];
                //$this->data['data2lbe'] = $this->data['data_lbe'];
            }
            $this->data['namalab'] = DB::select('SELECT l.nama_lab FROM laboratorium l WHERE id = '.$this->data['id_lab'])[0]->nama_lab;
            return view('MhsLbe\inputlbe', $this->data);
        }
        else{
            //dd('belum login');
            return redirect('/');
        }
    }

    public function save_tambahkan_lbe(Request $request)
    {
        $lbe = new Lbe;
        $lbe->deskripsi = $request->deskripsi;
        $lbe->id_lab = Auth::user()->id_lab;
        $lbe->save();

        return redirect('tambahkan-lbe');
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
