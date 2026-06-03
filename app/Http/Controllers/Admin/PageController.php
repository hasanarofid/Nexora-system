<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the pages.
     */
    public function index()
    {
        return Inertia::render('Admin/Pages/Index', [
            'pages' => Page::withCount('sections')->get()
        ]);
    }

    /**
     * Store a newly created page in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:pages,slug',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = Str::slug($validated['slug']);
        Page::create($validated);

        return redirect()->route('admin.pages.index')->with('success', 'Halaman baru berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified page and its dynamic sections.
     */
    public function edit(Page $page)
    {
        return Inertia::render('Admin/Pages/Edit', [
            'page' => $page->load('sections')
        ]);
    }

    /**
     * Update the page metadata (SEO title, slug, description).
     */
    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:pages,slug,' . $page->id,
            'meta_description' => 'nullable|string|max:500',
            'is_active' => 'required|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['slug']);
        $page->update($validated);

        return redirect()->route('admin.pages.edit', $page->id)->with('success', 'Detail halaman berhasil diperbarui.');
    }

    /**
     * Update a specific layout section in the page.
     */
    public function updateSection(Request $request, Page $page, Section $section)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:100',
            'content' => 'required|array',
            'is_active' => 'required|boolean',
        ]);

        $section->update($validated);

        return redirect()->back()->with('success', "Bagian '{$section->title}' berhasil diperbarui.");
    }

    /**
     * Remove the specified page.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil dihapus.');
    }
}
