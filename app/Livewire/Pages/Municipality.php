<?php

namespace App\Livewire\Pages;

use App\Models\Municipality as ModelsMunicipality;
use Livewire\Component;

class Municipality extends Component
{
    public $slug;
    public function render()
    {
        $municipality = ModelsMunicipality::where('slug', $this->slug)->first();
        $mucipalities = Municipality::all();
        return view('livewire.pages.municipality', ['municipality' => $municipality, 'mucipalities' => $mucipalities])->layout('layouts.base');
    }
}
