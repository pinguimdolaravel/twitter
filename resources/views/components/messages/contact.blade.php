@props(['room', 'isSelected' => false])

@php
    /** @var \App\Models\User $withWho */
    $withWho = $room->users->first();
@endphp
<div
    {{ $attributes->class([
        'pt-2 pb-4 px-3  border-r-2 bg-gray-600 bg-opacity-40 hover:bg-opacity-20 cursor-pointer',
        'border-r-blue-400' => $isSelected
]) }}
>
    <div class="flex align-top space-x-2">
        <div>
            <img alt="{{ $withWho->name }}" draggable="true" class="rounded-full w-14"
                 src="{{ $withWho->avatar }}"
            />
        </div>

        <div class="w-full">
            <div class="flex justify-between w-full">
                <div class="flex space-x-2">
                    <span class="text-white font-bold text-base">{{ $withWho->name }}</span>
                    <span class="text-sm text-neutral-500 font-semibold">{{ $withWho->username }} ·</span>
                </div>
                <div>
                    <x-tweet.action icon="dots" color="gray"/>
                </div>
            </div>
        </div>
    </div>
</div>
