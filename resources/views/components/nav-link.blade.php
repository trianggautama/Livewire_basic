@props(['active' => false])

@php 
    $classes = ($active ?? false)
                ? 'nav-link active mx-2'
                : 'nav-link mx-2';
@endphp
<li>
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
        {{$slot}}
    </a>
</li>
