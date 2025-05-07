@props([
    'variant'       => 'default',    // default | shimmer
    'type'          => 'button',      // button type
    'icon'          => null,          // optional raw SVG HTML
    'iconGap'       => '1',           // gap between icon and text (Tailwind spacing scale)
    'bgColor'       => 'blue-500',    // default variant background
    'hoverBgColor'  => 'teal-600',    // default variant hover background
    'textColor'     => 'white',       // default variant text color
    'shimmerBg'     => 'radial-gradient(ellipse 80% 50% at 50% 120%,rgba(62,61,117),rgba(18,18,38))',
    'spread'        => '90deg',       // shimmer spread
    'shimmerColor'  => '#ffffff',     // shimmer highlight color
    'radius'        => '100px',       // shimmer radius
    'speed'         => '1.5s',        // shimmer animation speed
    'cut'           => '0.1em',       // shimmer cut-inset
])
@php
// Build dynamic classes for default variant
$bgClass        = "bg-{$bgColor}";
$hoverBgClass   = "hover:bg-{$hoverBgColor}";
$textColorClass = "text-{$textColor}";
$defaultClasses = "py-5 px-16 text-lg {$bgClass} {$hoverBgClass} rounded {$textColorClass} transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 inline-flex justify-center items-center"; // Changed to inline-flex

// Compute gap class
$gapClass = "gap-{$iconGap}";

// Variant class map
$classes = [
    'default' => $defaultClasses,
    'shimmer' => 'relative group cursor-pointer overflow-hidden whitespace-nowrap px-14 py-4 text-white [background:var(--bg)] [border-radius:var(--radius)] transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_8px_rgba(62,61,117,0.7)] flex justify-center items-center',
];

// Inline style only for shimmer variant
$shimmerStyle = "--spread: {$spread}; --shimmer-color: {$shimmerColor}; --radius: {$radius}; --speed: {$speed}; --cut: {$cut}; --bg: {$shimmerBg};";
@endphp

<button
type="{{ $type }}"
{{ $attributes->except('icon')->merge(['class' => $classes[$variant] ?? $classes['default']]) }}
@if($variant === 'shimmer') style="{{ $shimmerStyle }}" @endif
>
{{-- Shimmer overlays --}}
@if($variant === 'shimmer')
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-[-100%] rotate-gradient">
            <div class="absolute inset-0 [background:conic-gradient(from_calc(270deg-(var(--spread)*0.5)),transparent_0,hsl(0_0%_100%/1)_var(--spread),transparent_var(--spread))]"></div>
        </div>
    </div>
    <div class="absolute [background:var(--bg)] [border-radius:var(--radius)] [inset:var(--cut)]"></div>
@endif

{{-- Icon + Text Wrapper --}}
<div class="z-10 flex items-center justify-center {{ $gapClass }}">
    @if(!empty($icon))
        <span class="inline-flex items-center justify-center">
            {!! $icon !!}
        </span>
    @endif
    <span @class([
        'w-auto whitespace-pre text-center font-semibold leading-none tracking-tight',
        // custom text color for default
        $variant === 'default' ? $textColorClass : '',
        // gradient text for shimmer
        $variant === 'shimmer' ? 'bg-gradient-to-b from-black from-30% to-gray-300/80 bg-clip-text text-white' : '',
    ])>
        {{ $slot }}
    </span>
</div>
</button>
