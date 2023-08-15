@extends('layouts.app')

@section('content')
    <section id="intro" class="py-4">
        <x-heading class="pt-4 mb-2">Slider A</x-heading>

        <x-section-link href="#intro" class="py-2">
            <span class="text-red-400">#</span> Introduction
        </x-section-link>

        <x-text class="mb-8">As you can see with <x-bold>Slider A</x-bold>, you get this slider layout with an optional title and filter section above the slides as well as the slider pagination beside the filter section. Each filter, when clicked, sends an AJAX GET request to <x-code-highlight>/api/sliders/filters</x-code-highlight> or to a custom endpoint which can be configured by providing a <x-code-highlight>data-filters-endpoint="/api/custom-filters-endpoint"</x-code-highlight>. Bear in mind that this endpoint should return a filtered list of the data that you plan to use for your slides. This endpoint will be receive a <x-code-highlight>filter</x-code-highlight> query parameter. Upon success, the contents of the slide are replaced with that of the returned data.</x-text>

        @php
            $filters = [
                'Filter 1',
                'Filter 2',
                'Filter 3',
                'Filter 4',
            ];

            $slides = [
                [
                    'title' => 'Slide 1',
                    'subtitle' => 'Slide 1',
                ],
                [
                    'title' => 'Slide 2',
                    'subtitle' => 'Slide 2',
                ],
                [
                    'title' => 'Slide 3',
                    'subtitle' => 'Slide 3',
                ],
                [
                    'title' => 'Slide 4',
                    'subtitle' => 'Slide 4',
                ]
            ];
        @endphp

        <x-slider-a :filters="$filters" data-swiper-pagination=".swiper-pagination-slider-a1">
            <x-slot:heading>
                Slider A1
            </x-slot>


            <x-slot:slides>
                @foreach ($slides as $slide)
                    <x-slide>
                        <div class="flex items-center justify-center min-h-[400px] bg-gray-200">
                            <div class="text-center">
                                <p class="text-4xl">{{ $slide['title'] }}</p>
                                <p>{{ $slide['subtitle'] }}</p>
                            </div>
                        </div>
                    </x-slide>
                @endforeach
            </x-slot>

            <x-slot:pagination>
                <x-slider-pagination class="swiper-pagination-slider-a1" style="position: static;" />
            </x-slot>
        </x-slider-a>

        @php
            $codeToHighlight = '
            $filters = [
                \'Filter 1\',
                \'Filter 2\',
                \'Filter 3\',
                \'Filter 4\',
            ];

            $slides = [
                [
                    \'title\' => \'Slide 1\',
                    \'subtitle\' => \'Slide 1\',
                ],
                [
                    \'title\' => \'Slide 2\',
                    \'subtitle\' => \'Slide 2\',
                ],
                [
                    \'title\' => \'Slide 3\',
                    \'subtitle\' => \'Slide 3\',
                ],
                [
                    \'title\' => \'Slide 4\',
                    \'subtitle\' => \'Slide 4\',
                ]
            ];

            <x-slider-a :filters="$filters">
                <x-slot:heading>
                    Slider A1
                </x-slot>

                <x-slot:slides>
                    @foreach ($slides as $slide)
                        <x-slide>
                            <div class="flex items-center justify-center min-h-[400px] bg-gray-200">
                                <div class="text-center">
                                    <p class="text-4xl">{{ $slide[\'title\'] }}</p>
                                    <p>{{ $slide[\'subtitle\'] }}</p>
                                </div>
                            </div>
                        </x-slide>
                    @endforeach
                </x-slot>
            </x-slider-a>
            ';
        @endphp

        <pre>
            <code>
                {{ $codeToHighlight }}
            </code>
        </pre>
    </section>

    <section id="customization" class="py-4">
        <x-section-link href="#customization" class="py-2">
            <span class="text-red-400">#</span> Customization
        </x-section-link>

        @php
            $codeToHighlight = '<x-slide></x-slide>';
        @endphp

        <x-text class="mb-8">
            As with any component in the Tailwind Component Library, <x-bold>Slider A</x-bold> is easily customizable. You are not just limited to using divs for your slides. You can also opt to use other components from the library, your own components or even blade templates so long as these are wrapped in a <x-code-highlight>{{ $codeToHighlight }}</x-code-highlight> .
        </x-text>

        @php
            $filters = [
                'Filter 1',
                'Filter 2',
                'Filter 3',
                'Filter 4',
            ];

            $chunks = [
                [
                    [
                        'title' => 'Slide 1',
                        'subtitle' => 'Slide 1',
                    ],
                    [
                        'title' => 'Slide 2',
                        'subtitle' => 'Slide 2',
                    ],
                    [
                        'title' => 'Slide 3',
                        'subtitle' => 'Slide 3',
                    ],
                    [
                        'title' => 'Slide 4',
                        'subtitle' => 'Slide 4',
                    ]
                ],
                [
                    [
                        'title' => 'Slide 5',
                        'subtitle' => 'Slide 5',
                    ],
                    [
                        'title' => 'Slide 6',
                        'subtitle' => 'Slide 6',
                    ],
                    [
                        'title' => 'Slide 7',
                        'subtitle' => 'Slide 7',
                    ],
                    [
                        'title' => 'Slide 8',
                        'subtitle' => 'Slide 8',
                    ]
                ]
            ];
        @endphp

        <x-slider-a :filters="$filters" data-swiper-pagination=".swiper-pagination-slider-a2">
            <x-slot:heading>
                Slider A2
            </x-slot>


            <x-slot:slides>
                @foreach ($chunks as $slides)
                    <x-slide class="grid md:grid-cols-2 gap-8" style="display: grid;">
                        @foreach ($slides as $slide)
                            <x-card-a>
                                <x-slot:title>
                                    {{ $slide['title'] }}
                                </x-slot>

                                <x-slot:subtitle>
                                    {{ $slide['subtitle'] }}
                                </x-slot>
                            </x-card-a>
                        @endforeach
                    </x-slide>
                @endforeach
            </x-slot>

            <x-slot:pagination>
                <x-slider-pagination class="swiper-pagination-slider-a2" style="position: static;" />
            </x-slot>
            
        </x-slider-a>

        @php
            $codeToHighlight = '
            <x-slider-a :filters="$filters">
                <x-slot:heading>
                    Slider A2
                </x-slot>

                <x-slot:slides>
                    @foreach ($chunks as $slides)
                        <x-slide class="grid md:grid-cols-2 gap-8" style="display: grid;">
                            @foreach ($slides as $slide)
                                <x-card-a>
                                    <x-slot:title>
                                        {{ $slide[\'title\'] }}
                                    </x-slot>

                                    <x-slot:subtitle>
                                        {{ $slide[\'subtitle\'] }}
                                    </x-slot>
                                </x-card-a>
                            @endforeach
                        </x-slide>
                    @endforeach
                </x-slot>
                
            </x-slider-a>
            ';
        @endphp

        <pre>
            <code>
                {{ $codeToHighlight }}
            </code>
        </pre>
    </section>

    <section id="props" class="py-4">
        <x-section-link href="#props" class="py-2">
            <span class="text-red-400">#</span> Props
        </x-section-link>

        <x-text class="mb-4">The <x-bold>Slider A</x-bold> component accepts the following props:</x-text>

        <div class="grid grid-cols-5">
            <div class="col-span-1 border p-4">Name</div>
            <div class="col-span-4 border border-l-0 p-4">Description</div>

            <div class="col-span-1 border border-t-0 p-4">Filters</div>
            <div class="col-span-4 border border-t-0 border-l-0 p-4">A string array that the component loops and uses for the filters section on the upper righthand corner of the component</div>
        </div>
    </section>

    <section id="slots" class="py-4">
        <x-section-link href="#slots" class="py-2">
            <span class="text-red-400">#</span> Slots
        </x-section-link>

        <x-text class="mb-4">The <x-bold>Slider A</x-bold> component accepts the following slots:</x-text>

        <div class="grid grid-cols-5">
            <div class="col-span-1 border p-4">Name</div>
            <div class="col-span-4 border border-l-0 p-4">Description</div>

            <div class="col-span-1 border border-t-0 p-4">Heading</div>
            <div class="col-span-4 border border-t-0 border-l-0 p-4">The heading that will be displayed on the top left corner of the slide</div>

            <div class="col-span-1 border border-t-0 p-4">Slides</div>
            <div class="col-span-4 border border-t-0 border-l-0 p-4">The slides that the component will render</div>
        </div>
    </section>

    <section id="data-attributes" class="pt-4 pb-12">
        <x-section-link href="#data-attributes" class="py-2">
            <span class="text-red-400">#</span> Data Attributes
        </x-section-link>

        <x-text class="mb-4">The <x-bold>Slider A</x-bold> component accepts the following data-attributes:</x-text>

        <div class="grid grid-cols-5">
            <div class="col-span-1 border p-4">Name</div>
            <div class="col-span-4 border border-l-0 p-4">Description</div>

            <div class="col-span-1 border border-t-0 p-4">data-slides-per-view</div>
            <div class="col-span-4 border border-t-0 border-l-0 p-4">Determines how many slides are displayed at a time. Default value <x-code-highlight>1</x-code-highlight>.</div>

            <div class="col-span-1 border border-t-0 p-4">data-loop</div>
            <div class="col-span-4 border border-t-0 border-l-0 p-4">Loops the slides. Default value <x-code-highlight>false</x-code-highlight>.</div>
        </div>
    </section>
@endsection