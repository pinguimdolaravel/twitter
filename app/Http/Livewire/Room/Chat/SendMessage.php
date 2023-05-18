<?php

namespace App\Http\Livewire\Room\Chat;

use App\Http\Livewire\Room\Chat;
use App\Models\Room;
use Livewire\Component;

class SendMessage extends Component
{
    public ?string $message = null;
    public ?Room $room;

    public function render()
    {
        return view('livewire.room.chat.send-message');
    }

    public function send()
    {
        $this->room->messages()
            ->create([
                'message' => $this->message,
                'from_id' => auth()->id(),
            ]);

        $this->emitTo(Chat::class, 'message::sent');
        $this->reset('message');
    }
}
