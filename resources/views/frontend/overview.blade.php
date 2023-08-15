@extends('layouts.app')

@section('content')
    <section id="intro" class="py-4">
        <x-heading class="pt-4 mb-2">Overview</x-heading>

        <x-section-link href="#intro" class="py-2">
            <span class="text-red-400">#</span> Introduction
        </x-section-link>

        @php
            $codeToHighlight1 = '<x-button />';
            $codeToHighlight2 = '<x-input />';
        @endphp

        <x-text class="mb-2">You may not be aware but this entire website was built using this component library. The whole idea of this library is so you have reusable components ready for you to use in your views in order to avoid having to write hundreds of lines of code for something that you've most likely already built before. If you've ever used React, Vue or Angular before then the concept is quite similar. You have several different components like <x-code-highlight>{{ $codeToHighlight1 }}</x-code-highlight> and <x-code-highlight>{{ $codeToHighlight2 }}</x-code-highlight>. Each of which accept <x-code-highlight>props</x-code-highlight> (data that you pass to components) and each component's global styles are configurable and can also be conveniently overwritten when needed. Lastly, tw-component-library uses <a class="text-blue-400" href="https://tailwindcss.com/" target="_blank">Tailwind CSS</a> so some knowledge of it would be beneficial.</x-text>
    </section>

    <section id="concept" class="py-4">
        <x-section-link href="#intro" class="py-2">
            <span class="text-red-400">#</span> Concept
        </x-section-link>

        <x-text>Building the frontend for a PHP website is time consuming. For example, you would probably do the something like this when you're building a slider.</x-text>

        @php
            $codeToHighlight = '<div class=\'some-slider {{ isset($containerClasses) ? $containerClasses : "" }}\'
    @if(isset($dataSomeAttribute)) data-some-attribute="{{ $dataSomeAttribute }}" @endif
    @if(isset($dataAnotherAttribute)) data-another-attribute="{{ $dataAnotherAttribute }}" @endif>
        @foreach($slides as $slide) 
            <div class=\'some-slide {{ isset($slideClasses) ? $slideClasses : "" }}\'>
                <div class=\'card {{ isset($cardClasses) ? $cardClasses : "" }}\'>
                    <div class=\'image {{ isset($imageClasses) ? $imageClasses : "" }}\'>
                        <img src="{{ $slide->image }}" />
                    </div>
                    <div class=\'title {{ isset($titleClasses) ? $titleClasses : "" }}\'>{{ $slide->title }}</div>    

                    <div class=\'content {{ isset($contentClasses) ? $contentClasses : "" }}\'>{{ $slide->content }}</div>
                </div>
            </div>
        @endforeach    
</div>';
        @endphp

        <pre>
            <code>{{ $codeToHighlight }}</code>
        </pre>

        <x-text>And your Javascript would probably look something like this.</x-text>

        @php
            $codeToHighlight = '<script>
    const slider = document.querySelector(\'.some-slider\');
    
    new Swiper(slider, {
        slidesPerView: 1,
        loop: false,
        autoHeight: true,
        navigation: {
            prevEl: \'.swiper-button-prev\',
            nextEl: \'.swiper-button-next\',
        },
        pagination: {
            el: \'.swiper-pagination\',
            clickable: true,
        },
    });
</script>';
        @endphp

        <pre>
            <code>{{ $codeToHighlight }}</code>
        </pre>

        <x-text>And your CSS like this.</x-text>

        @php
            $codeToHighlight = '.some-slider {
    background: #fafafa;
    color: #333;                
}

.some-slide {
    min-width: 400px;
    min-height: 600px;
}

.some-slider image {
    object-fit: cover;
    object-position: center;
}
';
        @endphp

        <pre>
            <code>{{ $codeToHighlight }}</code>
        </pre>

        @php
            $codeToHighlight1 = '<x-slider />';
            $codeToHighlight2 = '<x-card />';
            $codeToHighlight3 = '<x-image />';
            $codeToHighlight4 = '<x-my-awesome-slider />';
        @endphp

        <x-text class="mb-8">As you can see, it can get verbose rather quick and will honestly be a pain to maintain in the long run. The aim of tw-component-library is to do away with this style of coding. With tw-component-library, you simply just mix and match different Tailwind CSS-powered components and put them all together in your views (think LEGOs). Examples of such components are the <x-code-highlight>{{ $codeToHighlight1 }}</x-code-highlight> component, the <x-code-highlight>{{ $codeToHighlight2 }}</x-code-highlight> component and the <x-code-highlight>{{ $codeToHighlight3 }}</x-code-highlight> component which we can combine to create a slider.</x-text>

        @php
            $slides = [
                [
                    'title' => 'Slide 1',
                    'subtitle' => 'Slide 1 Content',
                    'image' => 'https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg',
                ],
                [
                    'title' => 'Slide 2',
                    'subtitle' => 'Slide 2 Content',
                    'image' => 'https://images.pexels.com/photos/1370704/pexels-photo-1370704.jpeg?auto=compress&cs=tinysrgb&w=800',
                ],
                [
                    'title' => 'Slide 3',
                    'subtitle' => 'Slide 3 Content',
                    'image' => 'https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=800',
                ],
                [
                    'title' => 'Slide 4',
                    'subtitle' => 'Slide 4 Content',
                    'image' => 'https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=800',
                ]
            ];
        @endphp

        <x-slider-a data-swiper-pagination=".swiper-pagination-slider-a1">
            <x-slot:heading>
                Some Title
            </x-slot>

            <x-slot:slides>
                @foreach ($slides as $slide)
                    <x-slide>
                        <div class="flex items-center justify-center min-h-[400px] bg-gray-200 bg-cover bg-center relative" style="background: url({{ $slide['image'] }}); background-position: center; background-size: cover;">
                            <div class="text-center text-white relative z-10">
                                <p class="text-4xl">{{ $slide['title'] }}</p>
                                <p>{{ $slide['subtitle'] }}</p>
                            </div>
                            <div class="absolute top-0 left-0 bg-black opacity-30 h-full w-full"></div>
                        </div>
                    </x-slide>
                @endforeach
            </x-slot>

            <x-slot:pagination>
                <x-slider-pagination class="swiper-pagination-slider-a1" style="position: static;" />
            </x-slot>
        </x-slider-a>

        @php
            $codeToHighlight = '<x-slider data-some-attribute="foo"
    data-another-attribute="bar">
    <x-slot:heading>
        Some Title
    </x-slot>
    
    <x-slot:slides>
        @foreach($slides as $slide)
            <x-slide>
                <x-card>
                    <x-slot:image>
                        <x-image src="{{ $slide->image }}" />
                    </x-slot>

                    <x-slot:title>
                        {{ $slide->title }}
                    </x-slot>

                    <x-slot:content>
                        {{ $slide->content }}
                    </x-slot>
                </x-card>    
            </x-slide>
        @endforeach
    </x-slot>
</x-slider>';
        @endphp

        <pre>
            <code>{{ $codeToHighlight }}</code>
        </pre>

        @php
            $codeToHighlight1 = '<x-slider />';
            $codeToHighlight2 = 'slider.blade.php';
            $codeToHighlight3 = '<x-card />';
            $codeToHighlight4 = '<x-slot />';
        @endphp

        <x-text class="mb-4">So what's happening here? Basically, we're just using a neat little feature from Laravel called <a class="text-blue-400" href="https://laravel.com/docs/10.x/blade#components" target="_blank">Components</a> (the <x-code-highlight>x-</x-code-highlight> prefix is how you can tell something is a component). Unlike blade templates, components act more like wrappers. With blade templates it simply is too much of a hassle to overwrite the contents making it less flexible in my opinion. But with Components, it's as if you're writing plain old HTML. Take for example the code above, I am wrapping everything in the <x-code-highlight>{{ $codeToHighlight1 }}</x-code-highlight> component. What this means is, when the view is rendered, the <x-code-highlight>{{ $codeToHighlight1 }}</x-code-highlight> wrapper will be replaced with the code we defined in the <x-code-highlight>{{ $codeToHighlight2 }}</x-code-highlight> file. This also works the same for the <x-code-highlight>{{ $codeToHighlight3 }}</x-code-highlight> component.</x-text>

        <x-text>Now, onto slots. If you notice we're also using a <x-code-highlight>{{ $codeToHighlight4 }}</x-code-highlight> component. This component is special in that it allows us to specify the content of the wrapping component. So take for example the <x-code-highlight>{{ $codeToHighlight3 }}</x-code-highlight> component above, as you can see we're specifying three slots inside of it <x-code-highlight>image</x-code-highlight>, <x-code-highlight>title</x-code-highlight> and <x-code-highlight>content</x-code-highlight>. This is telling our <x-code-highlight>{{ $codeToHighlight3 }}</x-code-highlight>  component to use the html or component we defined within each respective slot.</x-text>
    </section>

    <section id="overriding-defaults" class="pb-12">
        <x-section-link href="#overriding-defaults" class="py-2">
            <span class="text-red-400">#</span> Overriding Defaults
        </x-section-link>

        <x-text>In some situations, one or two components may differ design-wise. Let's take a simple button example.</x-text>

        @php
            $codeToHighlight1 = '<x-button>Button</x-button>';
            $codeToHighlight2 = '<x-button class="rounded-none border-black text-red-500">Button</x-button>';
        @endphp

        <pre>
            <code>{{ $codeToHighlight1 }}</code>
        </pre>

        <x-text class="mb-2 mt-[-1rem]">This will render a button with the following default global styles <x-code-highlight>border rounded-lg px-4 py-2 text-sm</x-code-highlight>.</x-text>

        <x-button class="mb-6">Button</x-button>

        <x-text class="mb-2">Now, this may be fine for most of the buttons on our site but on some pages the button needs to be a different color. For example, one page may need the button to have a black, non-rounded borders and red text. This can be easily done by doing the following.</x-text>

        <pre>
            <code>{{ $codeToHighlight2 }}</code>
        </pre>
    
        <x-button class="rounded-none border-black text-red-500 -mt-[1rem]">Button</x-button>
    </section>
@endsection
