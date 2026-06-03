<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display the dynamic frontend homepage.
     */
    public function index()
    {
        // 1. Get settings as key-value
        $settingsRaw = Setting::all();
        $settings = $settingsRaw->pluck('value', 'key')->toArray();
        
        // Append site_logo_url
        $logoSetting = $settingsRaw->firstWhere('key', 'site_logo');
        $settings['site_logo_url'] = $logoSetting ? $logoSetting->image_url : null;

        // 2. Get active pages for navigation menu
        $navigation = Page::where('is_active', true)
            ->select('id', 'title', 'slug')
            ->get();

        // 3. Get homepage with active sections
        $homePage = Page::where('slug', 'home')
            ->where('is_active', true)
            ->with(['sections' => function ($query) {
                $query->where('is_active', true);
            }])
            ->first();

        // 4. Get latest 3 published posts
        $posts = Post::where('status', 'published')
            ->with('category')
            ->latest()
            ->take(3)
            ->get()
            ->map(function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'content' => $post->content,
                    'image_url' => $post->image_url,
                    'category' => $post->category ? ['name' => $post->category->name] : null,
                    'created_at' => $post->created_at,
                ];
            });

        return Inertia::render('Welcome', [
            'settings' => $settings,
            'navigation' => $navigation,
            'page' => $homePage,
            'posts' => $posts,
        ]);
    }
}
