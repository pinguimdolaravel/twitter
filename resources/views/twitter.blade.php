<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased h-full bg-black text-white">

<div class="container mx-auto grid grid-cols-4 h-full">
    {{-- MENU --}}
    <div class="pt-px text-[#d6d9db] space-y-2 flex flex-col">
        <x-menu.item route="/" icon="twitter"/>
        <x-menu.item route="/timeline" title="Home" icon="home"/>
        <x-menu.item route="/explore" title="Explore" icon="explore"/>
        <x-menu.item route="/notifications" title="Notifications" icon="notifications"/>
        <x-menu.item route="/messages" title="Messages" icon="messages"/>
        <x-menu.item route="/bookmarks" title="Bookmarks" icon="bookmarks"/>
        <x-menu.item route="/twitter-blue" title="Twitter Blue" icon="twitter-blue"/>
        <x-menu.item route="/verified-organization" title="Verified Organization" icon="verified-org"/>
        <x-menu.item route="/profile" title="Profile" icon="profile"/>
        <x-menu.item route="/more" title="More" icon="more"/>

        <div>
            <x-btn.tweet class="mt-6">Tweet</x-btn.tweet>
        </div>
    </div>
    {{-- END MENU --}}


    {{-- CENTER --}}
    <div class="col-span-2 border-x-[0.625px] border-lines">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl font-semibold text-white">Home</h2>
        </div>

        <ul class="flex w-full grid grid-cols-2 text-center font-bold text-gray-500 border-b-[0.625px] border-lines">
            <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                <div class="border-b-4 w-fit pb-3 text-white border-twitter">For you</div>
            </li>
            <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                <div class="border-b-4 w-fit pb-3 border-transparent">Following</div>
            </li>
        </ul>

        <div class="border-b-[0.625px] border-lines py-2">
            <livewire:tweet.create/>
        </div>

        <livewire:timeline/>
    </div>
    {{-- END CENTER--}}

    {{-- RIGHT SIDE --}}
    <div class="">as</div>
    {{-- END RIGHT SIDE --}}

</div>

@livewireScripts
</body>
</html>
