<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';
    public $timestamps = false;

    protected $fillable = ['no_kamar'];

    // Relasi ke pasien
    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_kamar', 'id_kamar');
    }
}
