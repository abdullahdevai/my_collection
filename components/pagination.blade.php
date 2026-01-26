@props(['paginator'])

@if ($paginator->hasPages())
    <div class="mt-6 flex justify-center">
        <nav class="inline-flex items-center space-x-1" role="navigation" aria-label="Pagination">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span
                    class="px-4 py-2 rounded-lg bg-zinc-200 dark:bg-zinc-700 text-zinc-400 cursor-not-allowed select-none shadow-sm">
                    &laquo; Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="px-4 py-2 rounded-lg bg-white dark:bg-zinc-900 text-zinc-700 dark:text-zinc-200 hover:bg-zinc-50 dark:hover:bg-zinc-800 shadow-sm transition-colors">
                    &laquo; Previous
                </a>
            @endif

            {{-- Page Links --}}
            @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span
                        class="px-4 py-2 rounded-full bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 shadow-md">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $url }}"
                        class="px-4 py-2 rounded-full bg-white dark:bg-zinc-900 text-zinc-700 dark:text-zinc-200 hover:bg-indigo-50 dark:hover:bg-indigo-600 hover:text-indigo-700 dark:hover:text-white shadow-sm transition-colors">
                        {{ $page }}
                    </a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="px-4 py-2 rounded-lg bg-white dark:bg-zinc-900 text-zinc-700 dark:text-zinc-200 hover:bg-zinc-50 dark:hover:bg-zinc-800 shadow-sm transition-colors">
                    Next &raquo;
                </a>
            @else
                <span
                    class="px-4 py-2 rounded-lg bg-zinc-200 dark:bg-zinc-700 text-zinc-400 cursor-not-allowed select-none shadow-sm">
                    Next &raquo;
                </span>
            @endif

        </nav>
    </div>
@endif
