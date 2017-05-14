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
        //dd($this->data['administrator']);
        return view('Administrator\list-administrator', $this->data);
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

        return redirect('list_user');
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

        return redirect('list_user');
    }

    public function lihatuser()
    {
        return view('admin\lihatuser');
    }

    public function detailuser()
    {
        return view('admin\detailuser');
    }

    public function profil()
    {
        return view('admin\profil');
    }

    public function nyobamaster()
    {
        return view('admin\nyobamaster');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
