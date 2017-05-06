<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = [
    	'id_lab', 'nama_fasil', 'tahun_masuk', 'jumlah', 'kondisi'
    ];

    public function laboratorium(){
    	return $this->belongsTo('App/Laboratorium', 'id_lab');
    }
}
