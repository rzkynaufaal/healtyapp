@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>

@section('content')
<div class="mb-10">
    <div class=" mx-4 bg-gradient-to-r from-blue-800 to-indigo-600 text-white px-6 py-6 rounded-3xl shadow-lg transition-all duration-500 hover:shadow-2xl">
<h1 class="text-4xl font-extrabold drop-shadow-sm">Hello, {{ Auth::check() ? Auth::user()->name : 'Guest' }}!</h1>
        <p class="text-blue-100 mt-2 text-lg">Track your workout progress and stay motivated 💪</p>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    @php
        // $stats = [
        //     ['label' => 'Workouts Completed', 'value' => 24, 'icon' => 'fa-check-circle', 'color' => 'blue'],
        //     ['label' => 'Current Streak', 'value' => '7 days', 'icon' => 'fa-fire', 'color' => 'orange'],
        //     ['label' => 'sets total', 'value' => '3,450', 'icon' => 'fa-bolt', 'color' => 'yellow'],
        // ];
    @endphp
    @foreach($stats as $stat)
    <div class="bg-white/70 mx-4 backdrop-blur-md p-6 rounded-3xl shadow-xl border-t-4 border-{{ $stat['color'] }}-500 transition hover:scale-105 duration-300 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold uppercase">{{ $stat['label'] }}</p>
                <p class="text-4xl font-extrabold text-blue-800 mt-1">{{ $stat['value'] }}</p>
            </div>
            <i class="fas {{ $stat['icon'] }} text-{{ $stat['color'] }}-500 text-4xl transition duration-300 hover:rotate-12"></i>
        </div>
    </div>
    @endforeach
</div>

<!-- Recent Workouts -->
<div class="bg-white/80 mx-4 backdrop-blur rounded-3xl shadow-xl overflow-hidden mb-10">
    <div class="bg-gradient-to-r from-blue-700 to-indigo-700 text-white px-6 py-6">
        <h2 class="text-xl font-bold tracking-wide">📝 Recent Workouts</h2>
    </div>
    <div class="p-6">
        <div class="space-y-4">
            @foreach ($data as $item)
            <div class="border-b pb-4 last:border-b-0 hover:bg-blue-50 px-3 py-2 rounded-xl transition">
                <div class="grid grid-cols-2 md:grid-cols-7 gap-4 text-sm items-center">
                    <div class="font-semibold text-blue-800 col-span-2">{{ $item->date }}</div>
                    <div class="text-gray-700 font-medium">{{ $item->name }}</div>
                    <div class="text-blue-600"><i class="fas fa-layer-group mr-1"></i>{{ $item->sets }} sets</div>
                    <div class="text-orange-500"><i class="fas fa-dumbbell mr-1"></i>{{ $item->exercises }} exercises</div>
                    <div class="text-blue-500"><i class="fas fa-redo mr-1"></i>{{ $item->reps }} reps</div>
                    <div>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Completed</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('user.editworkout', $item->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('user.deleteworkout', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus workout ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="#" class="block text-center mt-6 text-blue-600 hover:text-blue-800 font-semibold transition">
            View All Workouts <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="hidden md:block"></div>
    <a href="{{ route('user.createworkout') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-6 rounded-3xl text-center shadow-xl hover:scale-105 transition transform duration-300 hover:shadow-2xl md:col-span-1">
        <i class="fas fa-plus-circle text-3xl mb-2 block animate-pulse"></i>
        <p class="font-semibold text-lg">New Workout</p>
    </a>
    <a href="{{ route('user.workoutguide')}}" class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6 rounded-3xl text-center shadow-xl hover:scale-105 transition transform duration-300 hover:shadow-2xl md:col-span-1">
        <i class="fas fa-book text-3xl mb-2 block"></i>
        <p class="font-semibold text-lg">Workout Guide</p>
    </a>
</div>
@endsection
