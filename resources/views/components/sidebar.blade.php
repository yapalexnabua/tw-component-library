<nav class="p-4 border-r h-screen sticky top-0 overflow-y-scroll">
    <ul>
        <li>
            <a class="mb-2 inline-block {{ Request::is('/') ? 'border-b-2 border-black' : '' }}" href="{{ route('overview') }}">Overview</a>
        </li>
        <li>
            <a class="mb-2 inline-block disabled {{ Request::is('quick-start*') ? 'border-b-2 border-black' : '' }}" href="{{ route('quick-start') }}">Quick Start</a>
        </li>
        <li>
            <a class="mb-2 inline-block" href="#">Components</a>

            <ul class="pl-6 flex flex-col">
                <li>
                    <a class="mb-2 inline-block disabled {{ Request::is('components/button*') ? 'border-b-2 border-black' : '' }}" href="{{ route('components.button') }}">Button</a>
                </li>
                <li>
                    <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Card</a>
                </li>
                <li>
                    <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Input</a>
                </li>
                <li>
                    <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Select</a>
                </li>
                <li>
                    <a class="mb-2 inline-block disabled" href="#">Dropdowns</a>

                    <ul class="pl-6 flex flex-col">
                        <li>
                            <a class="mb-2 inline-block disabled {{ Request::is('components/dropdowns/dropdown-a*') ? 'border-b-2 border-black' : '' }}" href="{{ route('components.sliders.slider-a') }}">Dropdown A</a>
                        </li>
                        <li>
                            <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Dropdown B</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="mb-2 inline-block" href="#">Sliders</a>

                    <ul class="pl-6 flex flex-col">
                        <li>
                            <a class="mb-2 inline-block {{ Request::is('components/sliders/slider-a*') ? 'border-b-2 border-black' : '' }}" href="{{ route('components.sliders.slider-a') }}">Slider A</a>
                        </li>
                        <li>
                            <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Slider B</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="mb-2 inline-block disabled" href="#">Behavior</a>

                    <ul class="pl-6 flex flex-col">
                        <li>
                            <a class="mb-2 inline-block disabled" href="{{ route('components.sliders.slider-a') }}">Sticky</a>
                        </li>
                        <li>
                            <a class="mb-2 inline-block disabled" href="{{ route('components.button') }}">Outside Click</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>