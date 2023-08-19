<?php

namespace App\Http\Livewire\Admin\Dokter;

use App\Models\Spesialis;
use Livewire\Component;

class SearchSpesialisDokter extends Component
{
    public $search;
    public $results = [];
    public $displayResult = false;
    
    public function updatedSearch(){
        if(empty($this->search)){
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

    public function selectItem($item){
        $this->search = $item;
        $this->displayResult = false;
    }
}
