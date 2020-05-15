<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $table = 'restoran';
    protected $fillable = ['nama_restoran', 'deskripsi', 'alamat', 'jam_buka', 'telfon', 'gambar'];
}
