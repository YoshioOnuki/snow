<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.home')]
#[Title('Home - Snow')]

class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
