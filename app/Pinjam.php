<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';

    protected $fillable = [
    	'id_lab', 'tanggal', 'jam_mulai', 'jam_selesai', 'nrp', 'peminjam', 'keperluan',
    ];

    public function laboratorium() {
    	return $this->belongsTo('App/laboratorium', 'id_lab');
    }
}
