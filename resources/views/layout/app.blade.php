<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Workout Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-blue-800 text-white w-64 space-y-6 py-7 px-2">
            <div class="text-white flex items-center space-x-2 px-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span class="text-xl font-bold">Workout Admin</span>
            </div>
            <nav>
                <a href="#" class="block py-2.5 px-4 rounded bg-blue-700">
                    Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">
                    Workout Plans
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">
                    Exercises
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">
                    Users
                </a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-700">
                    Settings
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>