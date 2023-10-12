<?php

namespace App\Livewire\Tweet;

use App\Events\TweetHasBeenCreated;
use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    use AuthorizesRequests;

    #[Rule(['required', 'max:140'])]
    public ?string $body = null;

    public function render(): View
    {
        return view('livewire.tweet.create');
    }

    public function tweet(): void
    {
        $this->authorize('create', Tweet::class);

        $this->validate();

        Tweet::query()->create([
            'body'       => $this->body,
            'created_by' => auth()->id(),
        ]);

        TweetHasBeenCreated::dispatch();
        $this->dispatch('tweet::created');
        $this->reset('body');
    }
}
