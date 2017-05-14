<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorium;
use DB;
use App\DosenLab;

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

    public function deskripsi_lab($id)
    {
        $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.id = '.$id)[0];
        return view('Laboratorium\deskripsi-laboratorium', $this->data);
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

    public function list_laboratorium() {
        $this->data['laboratorium'] = DB::select('SELECT * FROM laboratorium');
        return view('Laboratorium\list-laboratorium', $this->data);
    }

    public function pengaturan_laboratorium($id) {
        $this->data['laboratorium'] = DB::select('SELECT * FROM laboratorium WHERE id = '.$id)[0];
        return view('Laboratorium\pengaturan-laboratorium', $this->data);
    }

    public function save_pengaturan_laboratorium(Request $request,$id) 
    {
        $laboratorium = Laboratorium::find($id);
        $laboratorium->reservasiable = $request->reservasiable;
        $laboratorium->save();
        return redirect('list-laboratorium');
    }

    public function tambahkan_dosen_laboratorium() 
    {
        $this->data['laboratorium'] = DB::select('SELECT * FROM laboratorium');
        $this->data['dosen'] = DB::select('SELECT * FROM dosen');
        return view('Laboratorium\tambahkan-dosen-laboratorium', $this->data);
    }

    public function save_tambahkan_dosen_laboratorium(Request $request) 
    {
        $dosenLab = new DosenLab;
        $dosenLab->id_lab = $request->id_lab;
        $dosenLab->id_dosen = $request->id_dosen;
        $dosenLab->save();
        return redirect('home');
    }

    public function tambahkan_laboratorium()
    {
        return view('Laboratorium\tambahkan-laboratorium');
    }

    public function save_tambahkan_laboratorium(Request $request)
    {
        $laboratorium = new Laboratorium;
        $laboratorium->nama_lab = $request->nama_lab;
        $laboratorium->deskripsi_lab = $request->deskripsi_lab;
        $laboratorium->reservasiable = $request->reservasiable;
        $laboratorium->save();

        return redirect('list-laboratorium');
    }


}
