<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lbe extends Model
{
    protected $table = 'lbe';

    protected $fillable = ['id_lab', 'deskripsi',
    ];

    public function laboratorium() {
    	return $this->belongsTo('App/Laboratorium', 'id_lab');
    }
}
