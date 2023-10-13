<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Twitter extends Component
{
    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.twitter');
    }
}
