<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    {{-- Logo Slot --}}
    <div class="flex justify-center mb-4">
        {{ $logo }}
    </div>

    {{-- Content --}}
    {{ $slot }}
</div>
