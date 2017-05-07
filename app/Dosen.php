<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = [
    	'id_lab', 'nip', 'nama', 'email', 'no_hp', 'alamat',
    ];

    public function laboratorium(){
    	return $this->belongsTo('App\Laboratorium', 'id_lab');
    }

}
