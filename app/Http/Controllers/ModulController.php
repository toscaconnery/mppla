<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laboratorium;
use Auth;
use App\Modul;

class ModulController extends Controller
{
    // public function inputmodul()
    // {
    // 	$this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
    //     return view('admin\inputmodul',$this->data);
    // }

    public function input_modul_lbe()
    {
        if(Auth::check() and Auth::user()->is_admin){
        	$this->data['proyek'] = DB::select('SELECT p.* FROM proyek_lab p WHERE p.deleted_at IS NULL');
            $this->data['nama_lab'] = DB::select('SELECT l.nama_lab FROM laboratorium l WHERE id = '.Auth::user()->id_lab)[0]->nama_lab;
            return view('MhsLbe\inputmodul',$this->data);
        }
        else {
            return redirect('/');
        }
    }

    public function save_input_modul_lbe(Request $request)
    {
        if(Auth::check() and Auth::user()->is_admin){
        	$file = $request->file('berkas');
            $fileextension = $file->getClientOriginalExtension();
            $path = "modul-lbe/";
            $filename = date("Y-m-d-H-i-s").'-'.Auth::user()->id.'.'.$fileextension;
            $file->move($path, $filename);
            $modul = new Modul;
            $modul->id_proyek = $request->id_proyek;
            $modul->judul = $request->judul;
            $modul->modul = $path.$filename;
            $modul->save();
            return redirect('/');
        }
    }

    public function list_modul_lbe()
    {
    	$this->data['modul'] = DB::select('SELECT m.* FROM modul m');
    	return view('MhsLbe\list-modul-lbe', $this->data);
    }

    public function download_modul_lbe($id)
    {
    	$namafile = Modul::find($id);
        $file=$namafile->modul;
        return Response::download($file);
    }
}
