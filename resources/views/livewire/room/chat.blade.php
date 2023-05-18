<div class="
            border-x-[0.625px] border-lines relative h-full
            min-w-[580px] flex justify-between flex-col
        ">


    @if($room)
        <div class="flex align-center space-x-2 px-4 py-2 h-auto">
            <div>
                <img alt="Pinguim Academy" draggable="true" class="rounded-full w-10"
                     src="https://pbs.twimg.com/profile_images/1441217650680500231/NtMy9zs5_normal.jpg"
                />
            </div>

            <div class="flex items-center text-xl font-extrabold">
                {{ $withWho?->name }}
            </div>

        </div>

        <div class="h-full flex flex-col px-4 overflow-y-auto " id="messages">
            <div class="border-t-[0.625px] border-lines h-1 mx-2 my-4">

            </div>
            @foreach($room->messages as $message)
                <div class="flex {{ $message->from_id == auth()->id() ? 'justify-end' : '' }}">
                    <div class="w-fit">
                        <div
                            class="
                                {{ $message->from_id == auth()->id() ? 'rounded-br-md bg-[#43b3f6]' : 'rounded-bl-md bg-gray-700' }}
                            rounded-full  flex py-2 px-4
                             hover:bg-twitter cursor-pointer text-sm">
                            {{ $message->message }}
                        </div>

                        <div class="flex text-xs hover:underline text-gray-500 justify-end mt-2 cursor-pointer">
                            {{ $message->created_at->diffForHumans() }} · Sent
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <livewire:room.chat.send-message :room="$room"/>
    @endif
</div>
