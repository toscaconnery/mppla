<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorium;
use App\Fasilitas;
use DB;
use App\DosenLab;
use Auth;

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

    // public function kegiatanlab()
    // {
    //     return view('timer\kegiatan_lab');
    // }

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

    public function edit_deskripsi_laboratorium($id)
    {
        $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.id = '.$id)[0];

        return view('Laboratorium\edit-deskripsi-laboratorium', $this->data);
    }

    public function save_edit_deskripsi_laboratorium(Request $request, $id)
    {
        $laboratorium = Laboratorium::find($id);
        $laboratorium->deskripsi_lab = $request->deskripsi_lab;
        $file = $request->file('berkas');
        $path = "logo-laboratorium/";
        $fileextension = $file->getClientOriginalExtension();
        $filename = date("Y-m-d-H-i-s").'-'.Auth::user()->id.'.'.$fileextension;
        $file->move($path, $filename);
        $laboratorium->gambar = $path.$filename;
        $laboratorium->reservasiable = $request->reservasiable;
        $laboratorium->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('list-laboratorium');
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
        $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.deleted_at IS NULL');

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

    public function tambahkan_fasilitas_laboratorium()
    {
        //harus login, harus admin
        if(Auth::check()) {
            $id_lab = Auth::user()->id_lab;
            $this->data['laboratorium'] = DB::select('SELECT l.* 
                                                    FROM laboratorium l
                                                    WHERE l.id = '.$id_lab)[0];
            return view('Laboratorium\tambahkan-fasilitas-laboratorium', $this->data);
        }
        else {
            return redirect('home');
        }
        

    }

    public function save_tambahkan_fasilitas_laboratorium(Request $request)
    {
        $fasil = new Fasilitas;
        $fasil->id_lab = $request->id_lab;
        $fasil->nama_fasil = $request->nama_fasil; //kiri database kanan form
        $fasil->tahun_masuk = $request->tahun_masuk;
        $fasil->jumlah = $request->jumlah;
        $fasil->kondisi = $request->kondisi;

        $fasil->save();
        return redirect('list-fasilitas-laboratorium')->with('message','success');
    }

    public function edit_fasilitas_laboratorium($id)
    {

        $this->data['fasilitas'] = DB::select('SELECT f.*
                                                FROM fasilitas f
                                                WHERE f.id = '.$id)[0];
        $this->data['laboratorium'] = DB::select('SELECT l.*
                                                FROM laboratorium l
                                                WHERE l.id = '.$this->data['fasilitas']->id_lab)[0];
        return view('Laboratorium\edit-fasilitas-laboratorium', $this->data);
    }

    public function save_edit_fasilitas_laboratorium(Request $request, $id)
    {
        $fasil = Fasilitas::find($id);
        $fasil->id_lab = $request->id_lab;
        $fasil->nama_fasil = $request->nama_fasil; //kiri database kanan form
        $fasil->jumlah = $request->jumlah;
        $fasil->kondisi = $request->kondisi;

        $fasil->save();
        return redirect('list-fasilitas-laboratorium')->with('message','success');
    }

    public function list_fasilitas_laboratorium()
    {
        $this->data['listfasil'] = Fasilitas::all();
        //dd($listtugas);
        return view('Laboratorium\list-fasilitas-laboratorium', $this->data);
    }

}
