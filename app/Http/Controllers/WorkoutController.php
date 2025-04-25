<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index() {
        return redirect()->route('user.index');
    }

    function create() {
        return view('user.workout.createworkout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'date' => 'required|date',
            'Duration' => 'required|integer',
            'exercises' => 'required|string|max:225',
            'sets' => 'required|integer',
            'reps' => 'required|integer',
            'weight' => 'required|integer',
            'notes' => 'required|string|max:225',
        ]);

        $data = new Workout();
        $data->name = $request->name;
        $data->date = $request->date;
        $data->Duration = $request->Duration;
        $data->exercises = $request->exercises;
        $data->sets = $request->sets;
        $data->reps = $request->reps;
        $data->weight = $request->weight;
        $data->notes = $request->notes;
        $data->user_id = Auth::id();
        $data->save();

        return redirect()->route('user.index')->with('success', 'Congrats Bro workout berhasil ditambahkan');
    }
    
    public function dashboard()
{
    $user = Auth::user();

    $stats = [
        [
            'label' => 'Workouts Completed',
            'value' => $user->workouts()->count(),
            'icon' => 'fa-check-circle',
            'color' => 'blue',
        ],
        [
            'label' => 'Current Streak',
            'value' => $user->streak . ' days',
            'icon' => 'fa-fire',
            'color' => 'orange',
        ],
    //     [
    //         'label' => 'Calories Burned',
    //         'value' => number_format($user->workouts()->sum('calories')),
    //         'icon' => 'fa-bolt',
    //         'color' => 'yellow',
    //     ],
     ];

    $recentWorkouts = $user->workouts()->latest()->take(5)->get();

    return view('dashboard', [
        'stats' => $stats,
        'data' => $recentWorkouts,
    ]);
}

public function edit($id)
{
    $workout = Workout::findOrFail($id);
    return view('user.workout.editworkout', compact('workout'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:225',
        'date' => 'required|date',
        'Duration' => 'required|integer',
        'exercises' => 'required|string|max:225',
        'sets' => 'required|integer',
        'reps' => 'required|integer',
        'weight' => 'required|integer',
        'notes' => 'required|string|max:225',
    ]);

    $workout = Workout::findOrFail($id);
    $workout->name = $request->name;
    $workout->date = $request->date;
    $workout->Duration = $request->Duration;
    $workout->exercises = $request->exercises;
    $workout->sets = $request->sets;
    $workout->reps = $request->reps;
    $workout->weight = $request->weight;
    $workout->notes = $request->notes;
    $workout->save();

    return redirect()->route('user.index')->with('success', 'Workout berhasil diperbarui');
}

public function destroy($id)
{
    $workout = Workout::findOrFail($id);
    $workout->delete();

    return redirect()->route('user.index')->with('success', 'Workout berhasil dihapus');
}


}
