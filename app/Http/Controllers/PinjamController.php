<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pinjam;
class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['laboratorium'] = DB::select('SELECT nama_lab, id FROM laboratorium');
         return view('Pinjam\pinjam',$this->data);
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
     public function lakukan_reservasi(Request $request)
    {
        $reservasi= new Pinjam;
        $reservasi->id_lab = $request->id_lab;
        $reservasi->tanggal = $request->tanggal;
        $reservasi->jam_mulai = $request->jam_mulai; 
        $reservasi->jam_selesai = $request->jam_selesai;
        $reservasi->nrp = $request->nrp;
        $reservasi->peminjam = $request->peminjam;  
        $reservasi->keperluan = $request->keperluan;
        $reservasi->status_verif = 0;
        $reservasi->save();
        return redirect('jadwal-lab'); 
    }

     public function melihat_jadwal_lab()
    {
        $this->data['pinjam'] = DB::select('SELECT p.id_lab, p.tanggal, p.jam_mulai, p.jam_selesai, p.nrp, p.peminjam, p.keperluan FROM pinjam p, laboratorium l where p.id_lab=l.id');

        return view('Pinjam/lihatjadwal', $this->data);
    }   

    public function verif_pinjam()
    {
        return view('admin\verifpeminjaman');
    }

    public function list_pinjam()
    {
        return view('admin\listpeminjaman');
    }
}