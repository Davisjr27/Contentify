<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     if (Auth::check() && Auth::user()->role == 'admin') {
    //         return redirect()->route('admin.dashboard');
    //     }

    //     return view('dashboard');
    // }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('dashboard', compact('posts'));
    }



}
