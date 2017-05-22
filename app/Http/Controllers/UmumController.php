<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\laboratorium;

class UmumController extends Controller
{
    public function deskripsilab()
    {
    	// $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.id = '.$id)[0];
        return view('timer\deskripsi_lab');
    }

    public function kegiatanlab()
    {
    	// $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.id = '.$id)[0];
        return view('timer\kegiatan_lab');
    }

}
