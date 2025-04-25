<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Workout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('new.workout') }}" class="text-2xl font-bold text-blue-800">
                <i class="fas fa-dumbbell mr-2"></i>HealtyApp
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-blue-800">
                <i class="fas fa-edit mr-2 text-yellow-600"></i>Edit Workout
            </h1>
            <a href="{{ route('new.workout') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium">
                <i class="fas fa-times mr-2"></i>Cancel
            </a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden mb-8 border border-gray-200">
            <div class="bg-blue-600 text-white px-6 py-4">
                <h2 class="text-xl font-bold">Workout Details</h2>
            </div>

            <div class="p-6">
                <form action="{{ route('user.updateworkout', $workout->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Workout Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $workout->name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required />
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="date" class="block text-gray-700 font-medium mb-2">Date</label>
                            <input type="date" id="date" name="date" value="{{ old('date', $workout->date) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required />
                            @error('date')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="Duration" class="block text-gray-700 font-medium mb-2">Duration (minutes)</label>
                            <input type="number" id="Duration" name="Duration" value="{{ old('Duration', $workout->Duration) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required />
                            @error('Duration')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="exercises" class="block text-gray-700 font-medium mb-2">Exercises</label>
                        <input type="text" id="exercises" name="exercises" value="{{ old('exercises', $workout->exercises) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required />
                        @error('exercises')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                        <div>
                            <label for="sets" class="block text-gray-600 text-sm mb-1">Sets</label>
                            <input type="number" id="sets" name="sets" value="{{ old('sets', $workout->sets) }}" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" required />
                            @error('sets')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="reps" class="block text-gray-600 text-sm mb-1">Reps</label>
                            <input type="number" id="reps" name="reps" value="{{ old('reps', $workout->reps) }}" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" required />
                            @error('reps')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="weight" class="block text-gray-600 text-sm mb-1">Weight (kg)</label>
                            <input type="number" id="weight" name="weight" value="{{ old('weight', $workout->weight) }}" class="w-full px-3 py-1 border border-gray-300 rounded focus:ring-blue-500" required />
                            @error('weight')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="notes" class="block text-gray-700 font-medium mb-2">Notes</label>
                        <textarea id="notes" name="notes" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('notes', $workout->notes) }}</textarea>
                        @error('notes')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                            <i class="fas fa-save mr-2"></i>Update Workout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t mt-12 py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            <p>© 2025 HealtyApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
