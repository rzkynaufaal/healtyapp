<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index()  {
        $data = Workout::where('user_id', Auth::id())
        ->orderBy('date', 'desc')->get();

        // Calculate total reps
        $totalReps = $data->sum('reps');

        $totalSets = $data->sum('sets');

        $stats = [
            ['label' => 'Workouts Completed', 'value' => $data->count(), 'icon' => 'fa-check-circle', 'color' => 'blue'],
            ['label' => 'Reps Total', 'value' => $totalReps, 'icon' => 'fa-fire', 'color' => 'orange'],
            ['label' => 'Sets Total', 'value' => $totalSets, 'icon' => 'fa-bolt', 'color' => 'yellow'],
        ];

        return view('user.dashboard', ['data' => $data, 'stats' => $stats]);
    }

    public function workoutGuide()
    {
        return view('user.workoutguide');
    }
}
