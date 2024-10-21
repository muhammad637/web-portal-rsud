<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use App\Models\RawatJalan;
use Livewire\Component;

class SearchRawatJalan extends Component
{
    public $search;
    public $rawatJalanFormEdit;
    public $layanan;
    public $layanan_id;
    public $selectedItems = [];
    public function mount()
    {
        $this->layanan_id = old('rawatJalan', $this->layanan_id ?? []);
    }   
    public  function render()
    {
        return view('livewire.admin.dokter.search-rawat-jalan', [
            'layanan' => $this->layanan
        ]);
    }
}
