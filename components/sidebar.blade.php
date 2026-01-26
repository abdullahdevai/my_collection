<aside x-data="{ open: true }"
    class="flex flex-col h-screen bg-white dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-800 transition-all duration-300"
    :class="open ? 'w-64' : 'w-20'">
    <!-- Logo / Brand -->
    <div class="flex items-center justify-between h-20 px-4 border-b border-zinc-200 dark:border-zinc-800">
        <span class="text-2xl font-bold text-zinc-900 dark:text-zinc-100" x-show="open" x-transition>Blog Admin</span>
        <button @click="open = !open" class="p-1 rounded hover:bg-zinc-100 dark:hover:bg-zinc-800">
            <svg x-show="open" class="w-6 h-6 text-zinc-700 dark:text-zinc-300" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <svg x-show="!open" class="w-6 h-6 text-zinc-700 dark:text-zinc-300" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 mt-6 px-2 space-y-1">
        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h7v7H3V3zM14 3h7v7h-7V3zM3 14h7v7H3v-7zM14 14h7v7h-7v-7z" />
            </svg>

            <span x-show="open" x-transition>Dashboard</span>
            <!-- Tooltip when collapsed -->
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Dashboard</span>
        </a>

        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 21v-8H7v8" />
            </svg>

            <span x-show="open" x-transition>Posts</span>
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Posts</span>
        </a>

        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
            </svg>

            <span x-show="open" x-transition>Categories</span>
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Categories</span>
        </a>

        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 8h10M7 12h4m1 8a9 9 0 100-18 9 9 0 000 18z" />
            </svg>
            <span x-show="open" x-transition>Comments</span>
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Comments</span>
        </a>

        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 100-8 4 4 0 000 8z" />
            </svg>

            <span x-show="open" x-transition>Users</span>
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Users</span>
        </a>

        <a href=""
            class="flex items-center gap-3 px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 relative group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09a1.65 1.65 0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06a1.65 1.65 0 001.82.33h.01a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51h.01a1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82v.01a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
            </svg>
            <span x-show="open" x-transition>Settings</span>
            <span x-show="!open"
                class="absolute left-full ml-2 px-2 py-1 rounded bg-zinc-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Settings</span>
        </a>
    </nav>

    <!-- Footer / Logout -->
    <div class="px-4 py-6 border-t border-zinc-200 dark:border-zinc-800">
        <form method="POST" action="">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 w-full px-3 py-2 rounded-lg text-zinc-700 dark:text-zinc-300 hover:bg-red-100 dark:hover:bg-red-800 transition-colors duration-200 relative group">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                </svg>

                <span x-show="open" x-transition>Logout</span>
                <span x-show="!open"
                    class="absolute left-full ml-2 px-2 py-1 rounded bg-red-800 text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Logout</span>
            </button>
        </form>
    </div>
</aside>

<!-- Add Alpine.js for collapse behavior -->
<script src="//unpkg.com/alpinejs" defer></script>
