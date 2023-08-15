@extends('layouts.app')

@section('content')
    {{-- <x-heading>Buttons</x-heading> --}}

    <section id="button-component" class="py-4">
        <x-text>You may have noticed that all of the buttons on this site look more or less the same. That is because you are free to define global styling across all components with this component library. Currently the global styling for all of the buttons on this site are <x-code-highlight>border rounded-lg px-4 py-2 text-sm</x-code-highlight> and are fully customizable from the <x-code-highlight>tw-component-library.php</x-code-highlight> config file.</x-text>

        @php
            $codeToHighlight = '
                <x-button>
                    I am a button
                </x-button>
            ';
        @endphp

        <pre>
            <code class="language-html">
                {{ $codeToHighlight }}
            </code>
        </pre>

        <x-text class="mb-4">Will output:</x-text>
        <x-button type="submit">Button</x-button>
    </section>

    <section id="handling-one-offs" class="py-4">
        <x-section-link href="#handling-one-offs">Handling one-offs</x-section-link>

        <x-text>Say for example, you need one or two button hovers to be red instead of the default black one. You simply just need to add a <x-code-highlight>class</x-code-highlight> attribute to the component like you would any other html tag and the library will conveniently override the defaults.</x-text>

        @php
            $codeToHighlight = '
                <x-button class="hover:bg-red hover:border-red">
                    I am a button
                </x-button>
            ';
        @endphp

        <pre>
            <code class="language-html">
                {{ $codeToHighlight }}
            </code>
        </pre>

        <x-text class="mb-4">Will output:</x-text>
        <x-button class="hover:bg-red hover:border-red">Button</x-button>
    </section>
@endsection
