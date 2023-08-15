

@props(['heading' => null, 'filters' => [], 'slides' => null, 'pagination' => null])

<div {{ $attributes->twMerge('slider-a swiper-container container mx-auto px-4 md:px-0 grid grid-cols-1') }}>
    <div class="lg:flex justify-between mb-4 items-center">
        <div>
            @if ($heading)
                <x-heading :attributes="$heading->attributes->twMerge('text-center md:text-left text-2xl md:text-3xl text-[#2B2A29] uppercase')">
                    {{ $heading }}
                </x-heading>
            @endif
        </div>
        <div class="flex flex-col lg:flex-row lg:justify-end items-center">
            <div class="flex items-center overflow-x-scroll max-w-full border-t border-b border-[rgba(110,110,110,0.10)] lg:border-0 py-4 lg:py-0">
                @foreach ($filters as $filter)
                    <a href="#" class="swiper-filter text-sm px-2 lg:px-4 py-1 rounded-full uppercase whitespace-nowrap" data-filter="{{ $filter }}">
                        {{ $filter }}
                    </a>
                @endforeach
            </div>

            @if ($pagination)
                {{ $pagination }}
            @else
                <div class="swiper-pagination pt-4 lg:pt-0"></div>
            @endif
        </div>
    </div>

    <div class="swiper max-w-full">
        <div class="swiper-wrapper">
            @if ($slides)
                {{ $slides }}
            @else
                <x-slide>Slide 1</x-slide>
                <x-slide>Slide 2</x-slide>
                <x-slide>Slide 3</x-slide>
            @endif
        </div>
    </div>
</div>