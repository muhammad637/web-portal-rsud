<?php

namespace App\Http\Livewire;

use App\Models\Dokter;
use App\Models\Layanan;
use Livewire\Component;

class SearchDokter extends Component
{
    public $Spesialis;
    public $search = '';
    public $results;
    public $displayResult = false;
    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->results = [];
            return;
        }
        // $this->results = Layanan::where('nama', 'like', '%' . $this->search . '%')->get();
        $this->results = Dokter::where(function ($query) {
            $query->where('nama', 'like', '%' . $this->search . '%')
                ->orWhereHas('Rawatjalan', function ($subquery) {
                    $subquery->where('nama', 'like', '%' . $this->search . '%');
                });
        })->get();
        $this->displayResult = count($this->results) > 0;
    }
    public function selectItem($item)
    {
        $this->search = $item;
        $this->displayResult = false;
    }
    public function render()
    {
        return view('livewire.search-dokter');
    }
}
