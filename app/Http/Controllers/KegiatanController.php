<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kegiatan;
use App\User;
use App\Http\Controllers\Auth;


class KegiatanController extends Controller
{
    public function input_kegiatan()
    {
        $this->data['id_lab'] = Auth::user();
        dd($this->data['id_lab']);
        return view('admin\inputkegiatan', $this->data);
    }

    public function inputkegiatan(Request $request)
    {
        $kegiatan = new Kegiatan;
        $kegiatan->id_lab = $request->id_lab;
        $kegiatan->nama_kegiatan = $request->judul; //kiri database kanan form
        $kegiatan->tanggal = $request->tgl;
        $kegiatan->deskripsi = $request->kegiatan;

        $kegiatan->save();
        return redirect('inputkegiatan');
        //return view('admin\inputkegiatan');
    }
}
