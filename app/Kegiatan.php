<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
    	'id_lab', 'tanggal', 'jam_mulai', 'jam_selesai', 'nama_kegiatan',
    ];

    public function laboratorium(){
    	return $this->belongsTo('App/Laboratorium', 'id_lab');
    }
}
