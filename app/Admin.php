<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
    	'id_lab', 'nama', 'nrp', 'alamat', 'no_hp', 'tanggal_masuk',
    ];

    public function laboratorium(){
    	return $this->belongsTo('App\Laboratorium', 'id_lab');
    }

}
