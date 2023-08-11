<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function spesialis(){
        return $this->belongsTo(Spesialis::class, 'spesialis_id');
    }
    public function jadwalDokter(){
        return $this->hasMany(JadwalDokter::class);
    }
}
