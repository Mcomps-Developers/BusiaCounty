<?php

namespace App\Livewire\Pages;

use App\Models\CountyRevenueBoard;
use Livewire\Component;

class CountySecretariat extends Component
{
    public function render()
    {
        $content = CountyRevenueBoard::first();
        return view('livewire.pages.county-secretariat',['content'=>$content])->layout('layouts.base');
    }
}
