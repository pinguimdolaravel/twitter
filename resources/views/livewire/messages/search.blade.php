<div>
    <div class="px-4" x-data="{open: false}">
        <div x-show="open">
            <div class="flex space-x-2 items-center w-full">
            <span @click="open= false">
                <x-tweet.action icon="arrow-left" color="white"/>
            </span>
                <div class="flex relative text-center w-full">
                    <x-icons.search class="absolute mt-[11px] ml-5 w-5 fill-neutral-500"/>
                    <input type="text" placeholder="Search Direct Messages"
                           x-ref="search"
                           class="
                        bg-transparent rounded-full
                        focus:outline-none shadow h-10 px-14
                        border-blue-700 w-full
                   ">
                </div>
            </div>
        </div>
        <div x-show="!open">
            <div class="flex relative text-center">
                <x-icons.search class="absolute mt-[15px] ml-[76px] w-4 fill-neutral-500"/>
                <input type="text" placeholder="Search Direct Messages" @click="
                            open = true;
                            $nextTick(() =>$refs.search.focus());
                        "
                       class=" text-center text-sm
                        bg-transparent rounded-full
                        focus:outline-none shadow h-11
                        border-neutral-700 w-full
                   ">
            </div>
        </div>
    </div>

    <div class="h-5"></div>

    @foreach($rooms as $room)
        <x-messages.contact
            :room="$room"
            :is-selected="$room->id == $selectedRoom?->id"
            wire:click="selectRoom({{ $room->id }})"
        />
    @endforeach
</div>


