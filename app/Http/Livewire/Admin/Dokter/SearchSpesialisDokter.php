<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\Spesialis;
use Livewire\Component;

class SearchSpesialisDokter extends Component
{
    public $search;
    public $tipe_dokter;
    public $tipeDokterFormEdit;
    public $spesialisFormEdit;
    public $results = [];
    public $displayResult = false;

    public function mount($tipeDokterFormEdit = null, $spesialisFormEdit = null)
    {
        $this->tipe_dokter = $tipeDokterFormEdit;
        $this->spesialisFormEdit = $spesialisFormEdit;
        if ($this->tipeDokterFormEdit == 'spesialis') {
            $this->displayResult = true;
            $this->search = $this->spesialisFormEdit;
            return;
        }
    }

    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->displayResult = false;
            return;
        }
        $this->results = Spesialis::where('nama_spesialis', 'like', "%" . $this->search . "%")->get();
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
