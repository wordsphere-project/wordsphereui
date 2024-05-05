@props([
    'href',
    'sizeClasses'
])

<button href="{{ $href }}" {{ $attributes->except(['']) }} @class([$sizeClasses])>
    {{ $slot }}
</button>
