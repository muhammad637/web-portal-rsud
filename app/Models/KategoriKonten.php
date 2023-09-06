<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKonten extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function konten()
    {
        return $this->belongsToMany(Konten::class, 'many_many_kategori_kontent', 'kategori_konten_id','konten_id');
    }
}
