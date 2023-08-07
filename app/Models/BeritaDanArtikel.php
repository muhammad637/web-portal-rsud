<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaDanArtikel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'berita_dan_artikel_kategori');
    }
}
