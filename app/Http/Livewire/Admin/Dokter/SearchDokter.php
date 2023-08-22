<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\Dokter;
use Livewire\Component;

class SearchDokter extends Component
{
    public $search;
    public $results;
    public $gambarDokter;
    public $displayResult = false;

    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->results = [];
            $this->gambarDokter = null;
            return;
        }
        $this->results = Dokter::all();
        $this->displayResult = count($this->results) > 0;
    }
    public function render()
    {
        return view('livewire.admin.dokter.search-dokter');
    }

    public function selectItem($item, $gambar)
    {
        $this->gambarDokter = $gambar;
        $this->search = $item;
        $this->displayResult = false;
    }

    public function gamDokter($item)
    {
        $this->gambarDokter = $item;
    }
}
