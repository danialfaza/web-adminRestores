<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boking extends Model
{
protected $table = 'booking';
protected $fillable = ['tanggal', 'jam', 'jumlah', 'nama'];

}