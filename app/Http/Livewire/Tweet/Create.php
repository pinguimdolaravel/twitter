<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Create extends Component
{
    use AuthorizesRequests;

    public ?string $body = null;

    public function render(): View
    {
        return view('livewire.tweet.create');
    }

    public function tweet()
    {
        $this->authorize('create', Tweet::class);

        Tweet::query()->create([
            'body'       => $this->body,
            'created_by' => auth()->id(),
        ]);

        $this->emit('tweet::created');
    }
}
