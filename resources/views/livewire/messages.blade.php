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

                <x-tweet.action icon="new-message" color="white"/>
            </div>

            <livewire:messages.search/>

        </div>
    </div>

    <div class="
            border-x-[0.625px] border-lines relative h-full
            min-w-[580px] flex justify-between flex-col
        ">
        <div class="flex align-center space-x-2 px-4 py-2 h-auto">
            <div>
                <img alt="Pinguim Academy" draggable="true" class="rounded-full w-10"
                     src="https://pbs.twimg.com/profile_images/1441217650680500231/NtMy9zs5_normal.jpg"
                />
            </div>

            <div class="flex items-center text-xl font-extrabold">
                Rafael Lunardelli
            </div>

        </div>

        <div class="h-full flex flex-col px-4 overflow-y-auto " id="messages">
            <div class="border-t-[0.625px] border-lines h-1 mx-2 my-4">

            </div>
            <div class="flex justify-end">
                <div class="w-fit">
                    <div class="rounded-full rounded-br-md flex py-2 px-4 bg-[#43b3f6] hover:bg-twitter cursor-pointer text-sm">
                        Mensagem
                    </div>

                    <div class="flex text-xs hover:underline text-gray-500 justify-end mt-2 cursor-pointer">
                        12:14 AM · Sent
                    </div>
                </div>
            </div>
        </div>


        <div class="border-lines border-y-[0.625px] bottom-0 py-2 px-4">
            <div class="
                flex items-center space-x-1 px-1
                rounded-2xl bg-gray-600 bg-opacity-40 w-full h-10
            ">
                <x-tweet.action icon="picture" color="full-blue"/>
                <x-tweet.action icon="gif" color="full-blue"/>
                <x-tweet.action icon="emoji" color="full-blue"/>
                <input type="text" placeholder="Start a new message"
                       class="w-full bg-transparent focus:outline-none hover:outline-none border-0 outline-none focus:ring-0">
                <x-tweet.action icon="send" color="full-blue" disabled=""/>
            </div>
        </div>
    </div>
</div>
