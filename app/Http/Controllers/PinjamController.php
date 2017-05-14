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
    // public function index()
    // {
    //     $this->data['laboratorium'] = DB::select('SELECT nama_lab, id FROM laboratorium');
    //     return view('Pinjam\index',$this->data);
    // }

    public function lakukan_reservasi()
    {
        $this->data['laboratorium'] = DB::select('SELECT l.* 
                                                FROM laboratorium l
                                                WHERE l.reservasiable = 1');
        return view('Pinjam\lakukan-reservasi-laboratorium', $this->data);
    }

    public function save_lakukan_reservasi(Request $request)
    {
        $pinjam = new Pinjam;
        $pinjam->id_lab = $request->id_lab;
        $pinjam->peminjam = $request->peminjam;
        $pinjam->no_hp = $request->no_hp;
        $pinjam->email = $request->email;
        $pinjam->keperluan = $request->keperluan;
        $pinjam->tanggal = $request->tanggal;
        $pinjam->jam_mulai = $request->jam_mulai;
        $pinjam->jam_selesai = $request->jam_selesai;
        $pinjam->status_verif = 0;
        $pinjam->save();
        return redirect('/');
    }

    public function lihat_jadwal_reservasi()
    {
        $this->data['jadwal'] = DB::select('SELECT p.*, l.nama_lab
                                            FROM pinjam p, laboratorium l 
                                            WHERE p.tanggal > CURDATE()
                                            AND l.id = p.id_lab
                                            AND p.status_verif = 1');
        return view('Pinjam\lihat-jadwal-reservasi-laboratorium', $this->data);
    }

    public function lihat_semua_jadwal_reservasi()
    {
        $this->data['jadwal'] = DB::select('SELECT p.*, l.nama_lab
                                            FROM pinjam p, laboratorium l
                                            WHERE p.tanggal > CURDATE()
                                            AND l.id = p.id_lab
                                            ');
        return view('Pinjam\lihat-semua-jadwal-reservasi-laboratorium', $this->data);
    }

    public function accept_peminjaman_laboratorium($id)
    {
        $data = Pinjam::find($id);
        $data->status_verif = 1;
        $data->save();
        return redirect('lihat-semua-jadwal-reservasi-laboratorium');
    }

    public function decline_peminjaman_laboratorium($id)
    {
        $data = Pinjam::find($id);
        $data->status_verif = 2;
        $data->save();
        return redirect('lihat-semua-jadwal-reservasi-laboratorium');
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