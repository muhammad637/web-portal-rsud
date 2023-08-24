<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\RawatJalan;
use Livewire\Component;

class SearchRawatJalan extends Component
{
    public $search;
    public $rawatJalanFormEdit;
    public $results = [];
    public $displayResult = false;

    public function mount()
    {
        if ($this->rawatJalanFormEdit != null) {
            $this->displayResult = false;
            $this->search = $this->rawatJalanFormEdit;
            return;
        }
    }
    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->displayResult = false;
            return;
        }
        $this->results = RawatJalan::all();
        $this->displayResult = count($this->results) > 0;
    }
    public function render()
    {
        return view('livewire.admin.dokter.search-rawat-jalan');
    }
    public function selectItem($item)
    {
        $this->search = $item;
        $this->displayResult = false;
    }
}
