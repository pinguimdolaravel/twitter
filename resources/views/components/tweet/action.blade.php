@props([
    'icon'
])

<button
    {{ $attributes }}
    class="bg-transparent rounded-full p-1 hover:bg-opacity-20 hover:bg-gray-600">
    <x-dynamic-component
        :component="'icons.' .  $icon"
        class="fill-twitter h-5 w-6"
    />
</button>
