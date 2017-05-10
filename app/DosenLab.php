<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenLab extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
    	'id_lab', 'id_dosen',
    ];

    public function dosen(){
    	return $this->belongsTo('App\Dosen', 'id_dosen');
    }

    public function laboratorium(){
    	return $this->belongsTo('App\laboratorium', 'id_lab');
    }

}
