{{-- カテゴリー内のスロットを表現 --}}
@props(['active' => false])

@php
    $classes ='block text-left px-3 text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white';

    if($active) $classes = 'block text-left px-3 text-sm leading-6 bg-blue-500 text-white text-left';
@endphp
<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a> 
