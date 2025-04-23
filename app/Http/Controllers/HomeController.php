<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Correct import
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); 

       
        if ($user->role == 'admin') {
            return redirect()->route('admin.index');
        } elseif ($user->role == 'user') {
            return redirect()->route('user.index');
        }

       
        return view('home');
    }
}