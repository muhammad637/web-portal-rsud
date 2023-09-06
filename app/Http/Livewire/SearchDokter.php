<?php

namespace App\Http\Livewire;

use App\Models\Dokter;
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
        $this->results = Dokter::where('nama','like','%'.$this->search. '%')->get();
        // $this->results = Dokter::all();
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
