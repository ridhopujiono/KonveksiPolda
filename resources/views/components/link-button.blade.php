@props(['active'])

@php
$classes = 'bg-teal-300 px-4 py-2 text-md inline-flex text-white rounded';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
