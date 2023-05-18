<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Messages extends Component
{
    public function render(): View
    {
        return view('livewire.messages')
            ->layout('layouts.twitter');
    }
}
