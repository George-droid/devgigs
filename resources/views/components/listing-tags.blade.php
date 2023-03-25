@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="tags flex">
    @foreach ($tags as $tag)
        <li
            class="flex items-center justify-center bg-slate-800 text-white rounded-lg py-1 px-3 mr-2 text-xs"
        >
        <a class="text-lg" href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
