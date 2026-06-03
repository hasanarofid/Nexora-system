<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard home.
     */
    public function index()
    {
        return Inertia::render('Admin/Dashboard', [
            'stats' => [
                'users_count' => User::count(),
                'pages_count' => Page::count(),
                'posts_count' => Post::count(),
                'settings_count' => Setting::count(),
            ],
            'recent_posts' => Post::with('category')->latest()->take(5)->get(),
        ]);
    }
}
