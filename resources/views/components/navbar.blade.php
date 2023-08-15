@props(['logo' => null])

<nav {{ $attributes->twMerge('flex items-center justify-between p-4 border-b') }}>
    @if ($logo)
        {{ $logo }}
    @endif
</nav>