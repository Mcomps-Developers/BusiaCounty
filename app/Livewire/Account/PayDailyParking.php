<?php

namespace App\Livewire\Account;

use App\Models\DailyParking;
use Livewire\Component;

class PayDailyParking extends Component
{
    public $sticker;

    public function mount($sticker){
        $this->sticker=$sticker;
    }
    public function render()
    {
        $parking = DailyParking::where('reference',$this->sticker)->first();
        return view('livewire.account.pay-daily-parking',['parking'=>$parking])->layout('layouts.guest');
    }
}
