@props(['active'])

@php
    $classes = ($active ?? false)
    ? 'block py-2 px-3 md:p-0 text-gray-900 rounded-sm border-b-2 border-blue-500 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 poppins-medium'
    : 'block py-2 px-3 md:p-0 text-gray-500 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 poppins-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
