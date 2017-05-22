<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasLbe extends Model
{
    protected $table = 'tugas_lbe';

    protected $fillable = [
    'id_proyek', 'id_mhs', 'tugas', 'upload_tugas', 'deleted_at',
    ];

    public function mahasiswa(){
    	return $this->hasMany('App/Mahasiswa', 'id_mhs');
    }

    public function lbe(){
    	return $this->belongsTo('App/Lbe', 'id_proyek');
    }
}
