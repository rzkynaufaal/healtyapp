<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workout;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $workout = Workout::with('user')->get(); 
        

        return view('admin.index',['workout' => $workout]);
    }

    public function dashboard() {
        $totalWorkouts = Workout::count();
        $totalExercises = Workout::sum('sets'); // atau sesuaikan dengan kolom yang tepat
        $activeUsers = User::count();
    
        return view('admin.index', [
            'totalWorkouts' => $totalWorkouts,
            'totalExercises' => $totalExercises,
            'activeUsers' => $activeUsers,
        ]);
    }
    
    
}
