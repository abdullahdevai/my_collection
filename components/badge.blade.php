@props(['variant' => 'default'])

@php
    $variants = [
        'default' => 'bg-zinc-100 text-zinc-800 dark:bg-zinc-800 dark:text-zinc-200',
        'success' => 'bg-green-100 text-green-800',
        'danger' => 'bg-red-100 text-red-800',
    ];
@endphp

<span class="inline-flex rounded-md px-2 py-1 text-xs font-medium {{ $variants[$variant] }}">
    {{ $slot }}
</span>
