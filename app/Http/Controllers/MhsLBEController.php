<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;

class MhsLBEController extends Controller
{
    public function tambahkan_mahasiswa_lbe()
    {
        if(Auth::check()){
            if(Auth::user()->is_admin > 0) {
                $this->data['mahasiswa'] = DB::select('SELECT u.* FROM users u WHERE  u.id_lab IS NULL');
                $this->data['namalab'] = DB::select('SELECT l.nama_lab FROM laboratorium l WHERE l.id = '.Auth::user()->id_lab)[0]->nama_lab;

                return view('MhsLbe\tambahkan-mahasiswa-lbe', $this->data);
            }
            else{
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        } 
    }

    public function save_tambahkan_mahasiswa_lbe(Request $request)
    {
        if(Auth::check()){
            foreach($request->mhs as $id){
                $user = User::find($id);
                $user->id_lab = Auth::user()->id_lab;
                $user->save();
            }
            return redirect('tambahkan-mahasiswa-lbe');
        }
        else {
            return redirect('/');
        }
    }

    public function lihattugas()
    {
        $this->data['tugas'] = DB::select('SELECT t.* 
                                            FROM tugas_lbe t
                                            WHERE id_proyek = 1');
    	return view('mhslbe\lihattugas');
    }

    public function submitprogres()
    {
    	return view('MhsLbe\submitprogres');
    }

    public function historiprogres()
    {
    	return view('MhsLbe\histori');
    }

    public function unduhmodul()
    {
    	return view('MhsLbe\downloadmodul');
    }
}
