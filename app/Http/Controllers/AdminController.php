<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalPosts = Post::count();
        $activities = Activity::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalUsers', 'totalPosts', 'activities'));
    }
}
