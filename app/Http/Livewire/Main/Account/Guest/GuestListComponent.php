<?php

namespace App\Http\Livewire\Main\Account\GuestList;

use Livewire\Component;

class GuestListComponent extends Component
{
    public function render()
    {
        return view('livewire.main.account.guest.guest-list')->extends('livewire.main.layout.app')->section('content');
    }
}
