<form wire:submit.prevent="send" class="border-lines border-y-[0.625px] bottom-0 py-2 px-4">
    <div class="
                flex items-center space-x-1 px-1
                rounded-2xl bg-gray-600 bg-opacity-40 w-full h-10
            ">
        <x-tweet.action icon="picture" color="full-blue"/>
        <x-tweet.action icon="gif" color="full-blue"/>
        <x-tweet.action icon="emoji" color="full-blue"/>
        <input type="text" placeholder="Start a new message" wire:model.defer="message"
               class="w-full bg-transparent focus:outline-none hover:outline-none border-0 outline-none focus:ring-0">
        <x-tweet.action icon="send" color="full-blue" disabled="" type="submit"/>
    </div>
</form>
