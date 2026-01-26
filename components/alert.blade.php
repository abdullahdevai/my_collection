@php
    $classes = match ($type) {
        'success'
            => 'border-green-200 bg-green-50 text-green-800 dark:border-green-900 dark:bg-green-950 dark:text-green-300',
        'error' => 'border-red-200 bg-red-50 text-red-800 dark:border-red-900 dark:bg-red-950 dark:text-red-300',
        'warning'
            => 'border-yellow-200 bg-yellow-50 text-yellow-800 dark:border-yellow-900 dark:bg-yellow-950 dark:text-yellow-300',
        default => 'border-zinc-200 bg-zinc-50 text-zinc-800 dark:border-zinc-800 dark:bg-zinc-900 dark:text-zinc-300',
    };
@endphp

<div {{ $attributes->merge([
    'class' => "rounded-lg border px-4 py-3 text-sm {$classes}",
]) }}>
    {{ $slot }}
</div>
