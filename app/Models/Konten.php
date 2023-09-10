<?php

namespace App\Models;

use App\Models\KategoriKonten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Konten extends Model
{
    use HasFactory;
    use Sluggable;
/*  */

    protected $guarded = ['id'];
    public function kategori_konten()
    {
        return $this->belongsToMany(KategoriKonten::class,'many_many_kategori_kontent',  'konten_id', 'kategori_konten_id');
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
