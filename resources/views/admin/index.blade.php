@extends('layout.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold text-blue-800 mb-6">Dashboard Admin</h1>
    
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
            <h3 class="text-gray-500">Total Workouts</h3>
            <p class="text-3xl font-bold text-blue-800">124</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
            <h3 class="text-gray-500">Total Exercises</h3>
            <p class="text-3xl font-bold text-blue-800">56</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
            <h3 class="text-gray-500">Active Users</h3>
            <p class="text-3xl font-bold text-blue-800">892</p>
        </div>
    </div>

    <!-- Recent Workouts -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-blue-800">Recent Workouts</h2>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                View All
            </button>
        </div>
        
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase">Difficulty</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase">Exercises</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Beginner Full Body</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Beginner</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">8</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                        <button class="text-red-600 hover:text-red-800">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Advanced HIIT</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Advanced</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">12</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                        <button class="text-red-600 hover:text-red-800">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection