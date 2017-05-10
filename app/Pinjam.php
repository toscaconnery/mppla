<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';

    protected $fillable = [
    	'id_lab', 'peminjam', 'email', 'keperluan', 'tanggal', 'jam_mulai', 'jam_selesai', 'status_verif',
    ];

    public function laboratorium() {
    	return $this->belongsTo('App/laboratorium', 'id_lab');
    }
}
