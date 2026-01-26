@props([
    'variant' => 'default',
])

@php
    $variants = [
        'default' => 'bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-zinc-100 dark:text-zinc-900',
        'outline' => 'border border-zinc-300 hover:bg-zinc-100 dark:border-zinc-700 dark:hover:bg-zinc-800',
        'destructive' => 'bg-red-600 text-white hover:bg-red-500',
    ];
@endphp

<button
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium
                    transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-400 ' . $variants[$variant],
    ]) }}>
    {{ $slot }}
</button>
