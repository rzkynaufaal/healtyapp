<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - HealtyApp</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-800': '#1e40af',
                        'blue-600': '#2563eb',
                        'blue-500': '#3b82f6',
                        'blue-100': '#dbeafe',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Header/Navbar -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-800">
                <i class="fas fa-dumbbell mr-2"></i>HealtyApp
            </a>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-800">
                    <i class="fas fa-user-circle text-xl"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-md mx-auto mt-10 bg-white rounded-3xl shadow-lg p-8">
        <h2 class="text-3xl font-extrabold text-blue-800 mb-6 text-center">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('email') border-red-500 @enderror" />
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('password') border-red-500 @enderror" />
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input id="remember" type="checkbox" name="remember" class="mr-2" />
                <label for="remember" class="text-gray-700 font-semibold">Remember Me</label>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-3xl font-semibold shadow-lg hover:shadow-xl transition">
                    Login
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Forgot Your Password?
                    </a>
                @endif
            </div>
        </form>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
    <footer class="bg-white border-t mt-24 py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            <p>© 2025 HealtyApp. Created by El-Naufal.</p>
        </div>
    </footer>
</body>
</html>
