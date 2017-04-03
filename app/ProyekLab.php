<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyekLab extends Model
{
    protected $table = 'proyek_lab';

    protected $fillable = [
    	'nama_proyek', 'keterangan', 'id_lab'
    ];

    public function laboratorium(){
    	return $this->belongsTo('App/Laboratorium', 'id_lab');
    }

}
