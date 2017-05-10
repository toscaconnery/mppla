<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
    	'nip', 'nama', 'email', 'no_hp', 'alamat',
    ];

    public function dosenlab(){
    	return $this->hasMany('App\DosenLab', 'id');
    }

}
