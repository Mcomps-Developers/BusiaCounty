<?php

namespace App\Livewire\Pages;

use App\Models\CountyRevenueBoard as ModelsCountyRevenueBoard;
use Livewire\Component;

class CountyRevenueBoard extends Component
{
    public function render()
    {
        $content = ModelsCountyRevenueBoard::first();
        return view('livewire.pages.county-revenue-board', ['content' => $content])->layout('layouts.base');
    }
}
