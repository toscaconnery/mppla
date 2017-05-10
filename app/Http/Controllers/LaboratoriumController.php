<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorium;
use DB;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['laboratorium'] = DB::select('SELECT nama_lab, deskripsi_lab FROM laboratorium');
        //dd($this->data['laboratorium']);

        return view('Laboratorium\index', $this->data);
    }

    public function deskripsi_lab()
    {
        return view('timer\deskripsi_lab');
    }

    public function kegiatanlab()
    {
        return view('timer\kegiatan_lab');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['namaLaboratorium'] = DB::select('SELECT id, nama_lab FROM laboratorium');

        return view('Laboratorium\create', $this->data);
    }

    // public function tambah_deskripsi_lab()
    // {
    //     return view('timer\input_deskripsi');
    // }

    /**
     * untuk halaman kegiatan lab
    */

    // public function lihatkegiatan()
    // {
    //     return view('timer\kegiatan_lab');
    // }

    // public function inputkegiatan()
    // {
    //     return view('timer\input_kegiatan');
    // }

    /**
     * untuk halaman jadwal pinjam lab
    */

    public function lihat_jadwal()
    {
        return view('timer\lihat-jadwal');
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

    public function storedeskripsi(Request $request)
    {
        //Mencari laboratorium yang akan diedit
        $id = $request->id_lab;
        $data = Laboratorium::find($id);
        //Memberi nilai
        $data->deskripsi_lab = $request->deskripsi_lab;
        //Menyimpan nilai
        $data->save();

        return redirect('deskripsi-laboratorium');
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
