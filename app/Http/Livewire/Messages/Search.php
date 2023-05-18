<?php

namespace App\Http\Livewire\Messages;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Search extends Component
{
    public function render(): View
    {
        return view('livewire.messages.search');
    }
}
