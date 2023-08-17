<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaDanArtikel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'berita_dan_artikel_kategori');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
