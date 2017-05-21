<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\ProyekLab;
use App\Lbe;
use App\TugasLbe;

class LBEController extends Controller
{
    public function inputtugas()
    {
    	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');

        return view('admin\inputtugaslbe',$this->data);
    }

    // public function tambahkan_lbe()
    // {

    //     if(Auth::check())
    //     {
    //         $this->data['id_lab'] = Auth::user()->id_lab;
    //     }
    //     if(isset($this->data['id_lab']))
    //     {
    //         $this->data['adalbe'] = DB::select('SELECT l.id FROM lbe l WHERE l.id_lab = '.$this->data['id_lab'].' AND l.deleted_at IS NULL');
    //         if(isset($this->data['adalbe'])){
    //             $this->data['data_lbe'] = DB::select('SELECT l.* FROM lbe l WHERE l.id_lab = '.$this->data['id_lab'])[0];
    //             //$this->data['data2lbe'] = $this->data['data_lbe'];
    //         }
    //         $this->data['namalab'] = DB::select('SELECT l.nama_lab FROM laboratorium l WHERE id = '.$this->data['id_lab'])[0]->nama_lab;
    //         return view('MhsLbe\inputlbe', $this->data);
    //     }
    //     else{
    //         //dd('belum login');
    //         return redirect('/');
    //     }
    // }

    // public function save_tambahkan_lbe(Request $request)
    // {
    //     $lbe = new Lbe;
    //     $lbe->deskripsi = $request->deskripsi;
    //     $lbe->id_lab = Auth::user()->id_lab;
    //     $lbe->save();

    //     return redirect('tambahkan-lbe');
    // }

    public function tambahkan_proyek_lbe()
    {
        if(Auth::check()){
            $this->data['isadmin'] = Auth::user()->is_admin;
        }
        else{
            $this->data['isadmin'] = null;
        }
        
        return view('MhsLbe\inputproyeklbe', $this->data);
    }

    public function save_tambahkan_proyek_lbe(Request $request)
    {
        $proyek = new ProyekLab;
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->keterangan = $request->keterangan;
        $proyek->id_lab = Auth::user()->id_lab;
        $proyek->save();

        return redirect('/');
    }

    public function input_tugas_lbe()
    {
        if(Auth::check()){
            $this->data['punya_proyek'] = DB::select('SELECT p.* FROM proyek_lab p WHERE p.deleted_at IS NULL AND p.id_lab = '.Auth::user()->id_lab);
            if($this->data['punya_proyek']){
                $this->data['mahasiswa'] = DB::select('SELECT u.* FROM users u WHERE u.id_lab = '.Auth::user()->id_lab.' AND u.is_admin IS NULL');  
            }
            $this->data['nama_lab'] = DB::select('SELECT l.nama_lab FROM laboratorium l WHERE l.id = '. Auth::user()->id_lab)[0]->nama_lab;
            return view('MhsLbe/inputtugaslbe', $this->data);
        }
        else{
            return redirect('/');
        }
    }

    public function save_input_tugas_lbe(Request $request)
    {
        $id_proyek = DB::select('SELECT p.* FROM proyek_lab p WHERE p.id_lab = '.Auth::user()->id_lab.' AND p.deleted_at IS NULL')[0]->id;

        foreach($request->mhs as $data){
            $tugas = new TugasLbe;
            $tugas->id_proyek = $id_proyek;
            $tugas->id_mhs = $data;
            $tugas->judul = $request->judul;
            $tugas->tugas = $request->tugas;
            $tugas->upload_tugas = 1;
            $tugas->save();
        }
        return redirect('/');
    }

    public function lihat_tugas_lbe()
    {
        if(Auth::check())
        {
            $id_mhs = Auth::user()->id;
            $this->data['tugas'] = DB::select('SELECT t.* FROM tugas_lbe t WHERE t.id_mhs = '.Auth::user()->id);
            return view('MhsLBe\lihat-tugas-lbe', $this->data);
        }
        else
        {
            return redirect('/');
        }
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

    //     return view('admin\listtugas', $this->data);
    // }

}
