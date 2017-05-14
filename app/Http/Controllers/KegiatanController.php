<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kegiatan;
use App\User;
use Auth;




class KegiatanController extends Controller
{
    public function input_kegiatan()
    {
        $this->data['user'] = Auth::user();
        $this->data['laboratorium'] = DB::select('SELECT * 
                                                    FROM laboratorium 
                                                    WHERE id = '.$this->data['user']->id_lab)[0];

        return view('Kegiatan\input-kegiatan-laboratorium', $this->data);
    }

    public function save_input_kegiatan(Request $request)
    {
        $kegiatan = new Kegiatan;
        $kegiatan->id_lab = $request->id_lab;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan; //kiri database kanan form
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->jam_mulai = $request->jam_mulai;
        $kegiatan->jam_selesai = $request->jam_selesai;

        $kegiatan->save();
        return redirect('input-kegiatan');

    }

    public function lihat_kegiatan()
    {
        $this->data['user'] = Auth::user();
        $this->data['laboratorium'] = DB::select('SELECT l.* 
                                                FROM laboratorium l 
                                                WHERE l.id = '.$this->data['user']->id_lab)[0];
        $this->data['kegiatan'] = DB::select('SELECT k.*, l.nama_lab
                                                FROM kegiatan k, laboratorium l
                                                WHERE k.id_lab = l.id
                                                AND k.tanggal >= CURDATE()
                                                AND k.id_lab = '.$this->data['user']->id_lab);
        //dd($this->data['kegiatan'])
        return view('Kegiatan\lihat-kegiatan-laboratorium', $this->data);
    }


}
