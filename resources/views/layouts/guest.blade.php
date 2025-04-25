<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Healty</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class="bg-blue-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <i class="fas fa-dumbbell text-2xl text-blue-300"></i>
                <span class="text-2xl font-bold">HEALTY</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#features" class="hover:text-blue-200 transition">Features</a>
                <a href="#programs" class="hover:text-blue-200 transition">Programs</a>
                <a href="#testimonials" class="hover:text-blue-200 transition">Testimonials</a>
                <a href="{{route('login')}}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded transition">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-blue-800 hover:bg-gray-100 px-4 py-2 rounded transition">Register</a>
            </div>
            <button class="md:hidden text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Healty</h3>
                    <p class="text-blue-200">Your personal workout companion to achieve fitness goals efficiently.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">About</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Programs</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-blue-300"></i>
                            <span class="text-blue-200">infohealtyapp@healty.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone text-blue-300"></i>
                            <span class="text-blue-200">+62 (021)88776655
@stack('logs')
</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="" class="text-2xl text-blue-300 hover:text-white transition"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/rzkynaufaal?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-2xl text-blue-300 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl text-blue-300 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl text-blue-300 hover:text-white transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-6 text-center text-blue-300">
                <p>&copy; 2025 Healty. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
