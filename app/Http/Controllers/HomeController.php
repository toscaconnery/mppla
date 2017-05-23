<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/login');
    }

    public function show_home()
    {
        $this->data['laboratorium'] = DB::select('SELECT l.* FROM laboratorium l WHERE l.deleted_at IS NULL');
        $this->data['jumlah_laboratorium'] = DB::select('SELECT COUNT(l.id) as jumlah FROM laboratorium l WHERE l.deleted_at IS NULL')[0]->jumlah;
        //dd($this->data['jumlah_laboratorium']);
        return view('timer.index',$this->data); 
    }
}
