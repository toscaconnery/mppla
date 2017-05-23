<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function list_user()
    {
        $this->data['user'] = DB::select('SELECT * FROM users');

        return view('User\lihatuser', $this->data);
    }


    public function detail_user($id)
    {
        $this->data['user'] = DB::select('SELECT u.*
                                            FROM users u
                                            WHERE u.id ='.$id)[0];
        return view('User\detail-user', $this->data);
    }


    public function profil($id)
    {
        if(Auth::check()){
            if(Auth::user()->id == $id){
                $this->data['admin'] = DB::select('SELECT * from users WHERE id='.$id)[0];

                return view('Administrator\profil', $this->data);
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
        
    }

    public function update_profil(Request $request, $id)
    {
        $profil = User::find($id);
        $profil->name = $request->get('nama');
        $profil->email = $request->get('email');
        $profil->no_hp = $request->get('nohp');
        $profil->tanggal_lahir = $request->get('tgllahir');
        $profil->tempat_lahir = $request->get('tempatlhr');
        $profil->nrp = $request->get('nrp');
        $profil->alamat_asal = $request->get('asal');
        $profil->alamat_surabaya = $request->get('addsby');
        $profil->agama = $request->get('agama');
        $profil->motivasi = $request->get('motivasi');
        //$profil->password = $request->get('passwd');
        $profil->save();

        return redirect('profil/'.$id);
    }
    
}