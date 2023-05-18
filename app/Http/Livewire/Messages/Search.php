<?php

namespace App\Http\Livewire\Messages;

use App\Models\Room;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Search extends Component
{
    public ?Room $selectedRoom = null;

    protected $listeners = ['room::select' => 'selectRoom'];

    public function render(): View
    {
        return view('livewire.messages.search', [
            'rooms' => Room::query()
                ->whereHas('users', function (Builder $b) {
                    return $b->where('user_id', '=', 1);
                })
                ->with('users', function ($b) {
                    return $b->where('user_id', '!=', 1);
                })
                ->get()
        ]);
    }

    public function selectRoom($id): void
    {
        $this->selectedRoom = Room::find($id);

        $this->emit('room::chat', $id);
    }
}
