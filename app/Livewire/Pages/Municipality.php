<?php

namespace App\Livewire\Pages;

use App\Models\Municipality as ModelsMunicipality;
use Livewire\Component;

class Municipality extends Component
{
    public $municipality_name;
    public function render()
    {
        $municipality = ModelsMunicipality::where('name', $this->municipality_name)->first();
        $mucipalities = Municipality::all();
        return view('livewire.pages.municipality', ['municipality' => $municipality, 'mucipalities' => $mucipalities])->layout('layouts.base');
    }
}
