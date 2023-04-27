<div class="px-3 w-full">
    <div class="flex align-top">
        <div>
            <img alt="Pinguim Academy" draggable="true" class="rounded-full"
                 src="https://pbs.twimg.com/profile_images/1441217650680500231/NtMy9zs5_normal.jpg"
            />
        </div>
        <div x-data="{ editing: false }" class="w-full">
            <label>
                <textarea
                    wire:model="body" placeholder="What's happening?"
                    @click="editing = true"
                    class="
                        bg-transparent placeholder-gray-500 text-white font-medium
                        text-xl w-full border-none resize-none
                        focus:outline-none focus:ring-0 mt-1
                    "
                    rows="2" cols="50"
                ></textarea>
            </label>

            <div
                class="flex justify-between"
                :class="{ 'border-t-[0.625px] border-lines pt-4' : editing }"
            >
                <div class="flex items-center space-x-1">
                    <x-tweet.action icon="media"/>
                    <x-tweet.action icon="gif"/>
                    <x-tweet.action icon="poll"/>
                    <x-tweet.action icon="emoji"/>
                    <x-tweet.action icon="schedule"/>
                    <x-tweet.action icon="gps" disabled/>
                </div>

                <x-btn.tweet sm wire:click="tweet">Tweet</x-btn.tweet>
            </div>
        </div>
    </div>
</div>
