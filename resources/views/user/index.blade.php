<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="text-2xl font-bold mb-4">Available Workouts</h3>
        
        <div class="row">
            @foreach($workouts as $workout)
                <div class="col-md-4 mb-4">
                    <div class="card workout-card">
                        @if($workout->image)
                            <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->name }}" class="workout-image">
                        @else
                            <div class="workout-image bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title font-bold text-xl mb-2">{{ $workout->name }}</h5>
                            
                            <div class="workout-details">
                                <span class="difficulty-badge 
                                    @if($workout->difficulty == 'Beginner') difficulty-badge-beginner
                                    @elseif($workout->difficulty == 'Intermediate') difficulty-badge-intermediate
                                    @else difficulty-badge-advanced @endif">
                                    {{ $workout->difficulty }}
                                </span>
                                <span>{{ $workout->duration_minutes }} min</span>
                            </div>
                            
                            <p class="card-text mt-2">{{ Str::limit($workout->description, 100) }}</p>
                        </div>
                        
                        <div class="card-footer">
                            <div class="flex space-between">
                                <a href="{{ route('user.workout', $workout->id) }}" class="btn btn-primary mr-2">View Details</a>
                                <a href="{{ route('user.workout.track', $workout->id) }}" class="btn btn-success">Track Workout</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @if($completedWorkouts->count() > 0)
            <h3 class="text-2xl font-bold mb-4 mt-6">Recent Workouts</h3>
            
            <div class="card">
                <div class="card-body">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Workout</th>
                                <th class="px-4 py-2 text-left">Date</th>
                                <th class="px-4 py-2 text-left">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($completedWorkouts->take(5) as $userWorkout)
                                <tr>
                                    <td class="border px-4 py-2">{{ $userWorkout->workout->name }}</td>
                                    <td class="border px-4 py-2">{{ $userWorkout->completed_date->format('M d, Y') }}</td>
                                    <td class="border px-4 py-2">{{ Str::limit($userWorkout->notes, 50) ?: 'No notes' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        <a href="{{ route('user.workout.history') }}" class="text-blue-500">View all workouts →</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
</body>
</html>