<?php

namespace App\Http\Livewire\Admin\Jadwal;

use App\Models\Dokter;
use Livewire\Component;
use App\Models\JadwalDokter;

class JadwalDokterUpdate extends Component
{
    public $dokter;
    public $selecItem;
    public $jam_mulai_praktik;
    public $jam_selesai_praktik;
    public $display = false;
    public $oke;
    public $hari;
    // public function mount(){
    //     $this->hari = JadwalDokter::where('dokter_id',$this->dokter->id)->get();
    // }
    public function updatedHari()
    {
        $this->oke = JadwalDokter::where('dokter_id', $this->dokter->id)->where('hari', $this->hari)->get()->first();
        $this->jam_mulai_praktik = $this->oke->jam_mulai_praktik;
        $this->jam_selesai_praktik = $this->oke->jam_selesai_praktik;
    }


    public function render()
    {
        return view('livewire.admin.jadwal.jadwal-dokter-update');
    }
    public function selectItem($mulai, $selesai)
    {
        $this->display = true;
        $this->jam_mulai_praktik = $mulai;
        $this->jam_selesai_praktik = $selesai;
    }
}
