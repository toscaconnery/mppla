<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = 'modul';

    protected $fillable = [
    	'id_proyek', 'judul', 'modul',
    ];

    public function lbe(){
    	return $this->belongsTo('App/Lbe', 'id_proyek');
    }
}
