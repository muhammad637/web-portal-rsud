<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\Spesialis;
use Livewire\Component;

class SearchSpesialisDokter extends Component
{
    public $search;
    public $spesialisFormEdit;
    public $results = [];
    public $displayResult = false;

    public function mount()
    {
        if ($this->spesialisFormEdit != null) {
            $this->displayResult = false;
            $this->search = $this->spesialisFormEdit;
            return;
        }
    }

    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->displayResult = false;
            $this->search = '';
            return;
        }
        $this->results = Spesialis::all();
        $this->displayResult = count($this->results) > 0;
    }

    public function render()
    {
        return view('livewire.admin.dokter.search-spesialis-dokter');
    }

    public function selectItem($item)
    {
        $this->search = $item;
        $this->displayResult = false;
    }
}
