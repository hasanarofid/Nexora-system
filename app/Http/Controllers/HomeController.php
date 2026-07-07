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
    /**
     * Get shared frontend data (settings, navigation).
     */
    private function getSharedData()
    {
        $settingsRaw = Setting::all();
        $settings = $settingsRaw->pluck('value', 'key')->toArray();
        
        $logoSetting = $settingsRaw->firstWhere('key', 'site_logo');
        $settings['site_logo_url'] = $logoSetting ? $logoSetting->image_url : null;

        $navigation = Page::where('is_active', true)
            ->select('id', 'title', 'slug')
            ->get();

        return compact('settings', 'navigation');
    }

    /**
     * Display the dynamic frontend homepage.
     */
    public function index()
    {
        $shared = $this->getSharedData();

        // Get homepage with active sections
        $homePage = Page::where('slug', 'home')
            ->where('is_active', true)
            ->with(['sections' => function ($query) {
                $query->where('is_active', true);
            }])
            ->first();

        // Get latest 3 published posts
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

        return Inertia::render('Welcome', array_merge($shared, [
            'page' => $homePage,
            'posts' => $posts,
        ]));
    }

    /**
     * Display the Explore Creators page.
     */
    public function explore()
    {
        return Inertia::render('Explore', $this->getSharedData());
    }

    /**
     * Display the Creator Profile page.
     */
    public function showCreator($username)
    {
        // Add minimal dummy data for the creator based on username if needed, 
        // or just pass shared data to render the component.
        $data = array_merge($this->getSharedData(), [
            'username' => $username
        ]);
        return Inertia::render('Creators/Show', $data);
    }
}
