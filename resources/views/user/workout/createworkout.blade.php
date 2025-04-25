<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Workout</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <i class="fas fa-dumbbell mr-2"></i>HealtyApp</a>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-800">
                    <i class="fas fa-user-circle text-xl"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Page Title -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-blue-800">
                    <i class="fas fa-plus-circle mr-2 text-blue-600"></i>New Workout
                </h1>
                <p class="text-gray-600">Create your custom workout routine</p>
            </div>
            <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium">
                <i class="fas fa-times mr-2"></i>Cancel
            </a>
        </div>

        <!-- Workout Form -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-8 border border-gray-200">
            <!-- Form Header -->
            <div class="bg-blue-800 text-white px-6 py-4">
                <h2 class="text-xl font-bold">Workout Details</h2>
            </div>
            
            <!-- Form Body -->
            <div class="p-6">
                <form action="{{ route('user.storeworkout') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Workout Name -->
                    <div class="mb-6">
                        <label for="workout-name" class="block text-gray-700 font-medium mb-2">Workout Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukan tema workout lo bro" required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date & Duration -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="workout-date" class="block text-gray-700 font-medium mb-2">Date</label>
                            <input placeholder="Date" type="date" id="date" name="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            @error('date')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="workout-duration" class="block text-gray-700 font-medium mb-2">Duration (minutes)</label>
                            <input placeholder="Duration" type="number" id="Duration" name="Duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            @error('Duration')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Exercises Section -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-blue-800">Exercises</h3>
                        </div>

                        <!-- Exercise Item -->
                        <div class="border border-gray-200 rounded-lg p-4 mb-4">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex-1 mr-4">
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg mb-2 focus:ring-blue-500 focus:border-blue-500"
                                    name="exercises" id="exercises" required>
                                        <option value="">Select Exercise</option>
                                        <option value="Push Up">Push Up</option>
                                        <option value="Pull Up">Pull Up</option>
                                        <option value="Bench Press">Bench Press</option>
                                        <option value="Squad">Squad</option>
                                        <option value="Dumbel">Dumbel</option>
                                        <option value="Plank">Plank</option>
                                        <option value="Lateral Raise">Lateral Raise</option>
                                        <option value="Deadlift">Deadlift</option>
                                        <option value="Lat Pulldown">Lat Pulldown</option>

                                    </select>
                                    @error('exercises')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-gray-600 text-sm mb-1">Sets</label>
                                    <input type="number" placeholder="Jumlah sets" name="sets" id="sets" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" value="3" required>
                                    @error('sets')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm mb-1">Reps</label>
                                    <input type="number" placeholder="Jumlah reps" name="reps" id="reps" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" value="12" required>
                                    @error('reps')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm mb-1">Weight (kg)</label>
                                    <input type="number" placeholder="Weight" name="weight" id="weight" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" value="0" required>
                                    @error('weight')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="mb-6">
                        <label for="workout-notes" class="block text-gray-700 font-medium mb-2">Notes</label>
                        <textarea placeholder="Kasih dah tuh catatan" id="notes" name="notes" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                            <i class="fas fa-save mr-2"></i>Save Workout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12 py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            <p>© 2025 HealtyApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>