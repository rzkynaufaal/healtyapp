@extends('layouts.guest')

@section('title', 'Home - FitWork')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-700 text-white py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Transform Your Body, <span class="text-blue-300">Elevate Your Life</span></h1>
                <p class="text-xl mb-8 text-blue-100">Personalized workout plans designed to help you achieve your fitness goals faster and more efficiently.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('register') }}" class="bg-white text-blue-800 hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold text-center transition">Get Started</a>
                    <a href="#programs" class="border-2 border-white text-white hover:bg-blue-800 px-6 py-3 rounded-lg font-semibold text-center transition">Our Programs</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://img.freepik.com/free-photo/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club_637285-2497.jpg?t=st=1745558253~exp=1745561853~hmac=d9ba5431a9c2e01404d52602f32d22ea4240351591b66163a5a7537febc008cf&w=2000" 
                     alt="Workout" 
                     class="rounded-lg shadow-2xl max-w-md w-full">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Why Choose Healty?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">Personalized Plans</h3>
                    <p class="text-gray-600">Custom workout plans tailored to your fitness level and goals.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">Progress Tracking</h3>
                    <p class="text-gray-600">Monitor your improvements with detailed analytics and reports.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-user-md text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800">Expert Guidance</h3>
                    <p class="text-gray-600">Access to professional trainers and workout tips.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Our Popular Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Beginner Full Body', 'desc' => 'Perfect for starters', 'icon' => 'fa-user', 'color' => 'blue'],
                    ['title' => 'Weight Loss', 'desc' => 'Burn fat effectively', 'icon' => 'fa-fire', 'color' => 'red'],
                    ['title' => 'Muscle Building', 'desc' => 'Gain strength and mass', 'icon' => 'fa-dumbbell', 'color' => 'yellow'],
                    ['title' => 'HIIT Training', 'desc' => 'High intensity workouts', 'icon' => 'fa-bolt', 'color' => 'purple'],
                    ['title' => 'Yoga & Stretching', 'desc' => 'Improve flexibility', 'icon' => 'fa-spa', 'color' => 'green'],
                    ['title' => 'Advanced Program', 'desc' => 'For experienced athletes', 'icon' => 'fa-trophy', 'color' => 'indigo']
                ] as $program)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="bg-{{ $program['color'] }}-100 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <i class="fas {{ $program['icon'] }} text-{{ $program['color'] }}-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $program['title'] }}</h3>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $program['desc'] }}</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Details →</a>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-10">
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                    View All Programs
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Success Stories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach([
                    ['name' => 'AlFayad anvaris', 'role' => 'menggapai body impian', 'quote' => 'FitWork completely transformed my life. The personalized plan helped me lose weight sustainably.', 'img' => 'https://insights2techinfo.com/wp-content/uploads/2022/01/za.png'],
                    ['name' => 'Sabil Musodiq', 'role' => 'Lost 40kg', 'quote' => 'buat diet itu ezzz banget, yang susah cuman nahan buat gak', 'img' => 'https://www.thesmackdownhotel.com/images/wrestling/wrestlers/full-body/big-show.png']
                ] as $testimonial)
                <div class="bg-blue-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="{{ $testimonial['img'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-blue-800">{{ $testimonial['name'] }}</h4>
                            <p class="text-blue-600">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"{{ $testimonial['quote'] }}"</p>
                    <div class="flex mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Fitness Journey?</h2>
            <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">Join thousands of people who have transformed their lives with our workout programs.</p>
            <a href="{{ route('register') }}" class="inline-block bg-white text-blue-800 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition">
                Get Started Today - It's Free!
            </a>
        </div>
    </section>
@endsection