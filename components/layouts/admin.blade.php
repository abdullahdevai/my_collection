<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Panel' }}</title>

    <!-- Inter Font (shadcn-style typography) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class', // important! allows toggling via class="dark"
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>

</head>

<body class="h-full bg-zinc-50 font-sans text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
    <div class="flex h-full">
        <x-sidebar />

        <div class="flex flex-1 flex-col">
            <x-topbar />

            <main class="flex-1 overflow-y-auto p-6">
                <div class="mx-auto max-w-7xl space-y-6">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>
