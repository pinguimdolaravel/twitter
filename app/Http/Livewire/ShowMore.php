<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @property-read int $count
 */
class ShowMore extends Component
{
    protected $listeners = ['echo-private:tweets,TweetHasBeenCreated' => '$refresh'];

    public function render(): View
    {
        return view('livewire.show-more');
    }

    public function more(): void
    {
        $this->emitTo(Timeline::class, 'show::more');

        session()->put('last-tweet', Tweet::query()->latest()->first()->id);
    }

    public function getCountProperty(): int
    {
        return Tweet::query()
            ->where('id', '>', session('last-tweet', 0))
            ->count();
    }
}
