<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
    'id_proyek', 'id_lab', 'nama', 'nrp', 'angkatan'];

    public function lbe(){
    	return $this->belongsTo('App/Lbe', 'id_proyek');
    }

    public function laboratorium(){
    	return $this->belongsTo('App/Laboratorium');
    }
}
