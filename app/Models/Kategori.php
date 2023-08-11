<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function beritadanartikel(){
        return $this->belongsToMany(BeritaDanArtikel::class, 'berita_dan_artikel_kategori');
    }
}
