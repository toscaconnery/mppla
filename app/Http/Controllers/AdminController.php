<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laboratorium;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\index-admin');
    }

    public function input_deskripsi()
    {
        $this->data['id_lab'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        return view('admin\inputdeskripsi', $this->data);
    }

    public function inputdesc(Request $request, $id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        $laboratorium->deskripsi_lab = $request->deskripsi_lab;

        $laboratorium->save();

        return redirect('inputdeskripsi')->with('message','Updated');
    }

    public function input_administrator()
    {
        return view('admin\inputadmin');
    }

    public function list_administrator()
    {
        $this->data['administrator'] = DB::select('SELECT u.*, l.nama_lab
                                                    FROM users u, laboratorium l
                                                    WHERE u.is_admin = 1
                                                    AND l.id = u.id_lab');
        return view('Administrator\list-administrator', $this->data);
    }

    public function list_user()
    {
        return view('User\list-user');
    }

    public function jadikan_admin($id)
    {
        $this->data['namaLaboratorium'] = DB::select('SELECT id, nama_lab FROM laboratorium');
        $this->data['admin'] = User::find($id);

        return view('admin\jadikan-admin', $this->data);
    }

    public function update_jadikan_admin(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->is_admin = 1;
        $admin->id_lab = $request->get('id_lab');
        $admin->save();

        return redirect('list-user');
    }

    public function nonaktifkan_admin($id)
    {
        $this->data['admin'] = User::find($id);

        return view('admin\nonaktifkan-admin',$this->data);
    }

    public function update_nonaktifkan_admin($id)
    {
        $admin = User::find($id);
        $admin->is_admin = null;
        $admin->id_lab = null;
        $admin->save();

        return redirect('list-user');
    }

    

    public function nyobamaster()
    {
        return view('admin\nyobamaster');
    }

}
