<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function kategori_konten()
    {
        return $this->belongsToMany(KategoriKonten::class,'many_many_kategori_kontent', 'kategori_konten_id', 'konten_id');
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
