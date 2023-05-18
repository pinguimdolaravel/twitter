<?php

namespace App\Http\Livewire\Room;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public function render(): View
    {
        return view('livewire.room.create');
    }

    public function openModal()
    {
        $this->dispatchBrowserEvent('open-modal', 'new-chat-modal');
    }
}
