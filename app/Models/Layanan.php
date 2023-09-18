<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoriLayanan(){
        return $this->belongsTo(KategoriLayanan::class, 'kategori_layanan_id' );
    }

    public function dokter(){
        return $this->belongsToMany(Dokter::class,'dokter_layanans','layanan_id','dokter_id');
    }
    
}
