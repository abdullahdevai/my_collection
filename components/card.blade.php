<div
    {{ $attributes->merge([
        'class' => 'rounded-lg border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-900',
    ]) }}>
    {{ $slot }}
</div>
