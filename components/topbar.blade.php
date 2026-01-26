<header class="sticky top-0 z-50 border-b border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900 shadow-sm">
    <div class="flex h-16 items-center justify-between px-6">
        <!-- Logo / Title -->
        <div class="flex items-center space-x-3">
            <span class="text-xl font-semibold text-zinc-900 dark:text-zinc-100">Admin Panel</span>
        </div>

        <!-- Right-side controls -->
        <div class="flex items-center gap-4">
            <!-- Theme Toggle -->
            <button id="theme-toggle" class="p-2 rounded-md hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-zinc-800 dark:text-zinc-100"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="theme-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m8.66-10h-1M4.34 12h-1m15.07 4.24l-.71-.71M6.34 6.34l-.71-.71m12.02 12.02l-.71-.71M6.34 17.66l-.71-.71M12 7a5 5 0 100 10 5 5 0 000-10z" />
                </svg>
            </button>

            <!-- Profile Button -->
            <x-button variant="outline">Profile</x-button>
        </div>
    </div>
    <script>
        const toggleButton = document.getElementById('theme-toggle');
        const htmlEl = document.documentElement;

        // Load saved theme
        if (localStorage.getItem('theme') === 'dark') {
            htmlEl.classList.add('dark');
        } else if (localStorage.getItem('theme') === 'light') {
            htmlEl.classList.remove('dark');
        }

        toggleButton.addEventListener('click', () => {
            htmlEl.classList.toggle('dark');
            localStorage.setItem(
                'theme',
                htmlEl.classList.contains('dark') ? 'dark' : 'light'
            );
        });
    </script>
</header>
