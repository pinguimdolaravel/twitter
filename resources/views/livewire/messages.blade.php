<div class="flex">
    {{--    centro --}}
    <div class="
            col-span-2 border-x-[0.625px]
            border-lines relative h-full overflow-y-auto
            min-w-[380px]
        ">
        <div class="sticky top-0 w-full backdrop-blur-xl space-y-4">
            <div class="flex m-2 justify-between items-center">
                <h2 class="px-4 py-2 text-xl font-semibold text-white">
                    Messages
                </h2>

                <livewire:room.create />
            </div>

            <livewire:messages.search/>

        </div>
    </div>

    <livewire:room.chat/>
</div>
