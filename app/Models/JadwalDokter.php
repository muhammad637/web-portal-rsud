<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    public function rules()
    {
        return [
            'hari' => [
                'required',
                'array',
                function ($attribute, $value, $fail) {
                    $dokter = $this->input('nama_dokter');
                    $dokterId = Dokter::where('nama', $dokter)->first()->id;
                    $existingJadwal = JadwalDokter::where('dokter_id', $dokterId)
                        ->whereIn('hari', $value)
                        ->exists();

                    if ($existingJadwal) {
                        $fail("Jadwal hari untuk dokter dengan ID $dokterId sudah ada.");
                    }
                }
            ]
        ];
    }
}
