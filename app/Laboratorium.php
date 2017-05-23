<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = 'laboratorium';

    protected $fillable = [
    	'nama_lab', 'deskripsi_lab', 'gambar',
    ];

    public function admin(){
    	return $this->hasMany('App\Admin');
    }

    public function pinjam(){
    	return $this->hasMany('App\Pinjam');
    }

    public function lbe(){
    	return $this->hasMany('App\Lbe');
    }

    public function dosenlab(){
        return $this->hasMany('App\DosenLab', 'id');
    }
}
