@props(['image' => null, 'title' => null, 'subtitle' => null])

<div {{ $attributes->twMerge('text-center mb-4') }}>
    @if ($image)
        {{ $image }}
    @else
        <x-image />
    @endif

    @if ($title)
        <x-heading :attributes="$title->attributes->twMerge('text-2xl block mt-4')">
            {{ $title }}
        </x-heading>
    @endif

    @if ($subtitle)
        <x-heading :attributes="$subtitle->attributes->twMerge('text-base block')">
            {{ $subtitle }}
        </x-heading>
    @endif
</div>