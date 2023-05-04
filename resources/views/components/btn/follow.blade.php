

<button
    {{ $attributes->class(["
        bg-white rounded-full font-extrabold text-black
        py-[4px] font-bold px-5 w-fit
    "]) }}
>
    {{ $slot }}
</button>
