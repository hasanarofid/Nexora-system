<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Roles and Permissions
        $this->call(RoleAndPermissionSeeder::class);

        // 2. Seed Default Users and Assign Roles
        $admin = User::updateOrCreate(
            ['email' => 'admin@cms.com'],
            [
                'name' => 'Admin CMS',
                'password' => bcrypt('password'),
            ]
        );
        $admin->assignRole('admin');

        $editor = User::updateOrCreate(
            ['email' => 'editor@cms.com'],
            [
                'name' => 'Editor CMS',
                'password' => bcrypt('password'),
            ]
        );
        $editor->assignRole('editor');

        $client = User::updateOrCreate(
            ['email' => 'client@cms.com'],
            [
                'name' => 'Client CMS',
                'password' => bcrypt('password'),
            ]
        );
        $client->assignRole('client');

        // 3. Seed Settings
        $this->call(SettingSeeder::class);

        // 4. Seed Pages and Sections
        $this->call(PageAndSectionSeeder::class);

        // 5. Seed Categories & Posts
        $general = Category::updateOrCreate(
            ['slug' => 'general'],
            ['name' => 'General']
        );

        $tech = Category::updateOrCreate(
            ['slug' => 'technology'],
            ['name' => 'Technology']
        );

        Post::updateOrCreate(
            ['slug' => 'selamat-datang-di-boilerplate-cms-baru-anda'],
            [
                'category_id' => $general->id,
                'title' => 'Selamat Datang di Boilerplate CMS Baru Anda',
                'content' => 'Ini adalah postingan pertama di CMS Anda. Anda dapat mengedit, menghapus, atau membuat postingan baru melalui dashboard admin dengan sangat mudah.',
                'image' => null,
                'status' => 'published',
                'is_featured' => true
            ]
        );

        Post::updateOrCreate(
            ['slug' => 'mengapa-laravel-11-dan-vue-3-sangat-powerful'],
            [
                'category_id' => $tech->id,
                'title' => 'Mengapa Laravel 11 dan Vue 3 Sangat Powerful?',
                'content' => 'Kombinasi Laravel dan Vue 3 yang dihubungkan oleh Inertia.js menciptakan pengalaman pengembangan Single Page Application (SPA) murni tanpa overhead penulisan API terpisah. Hal ini mempercepat siklus development secara signifikan.',
                'image' => null,
                'status' => 'published',
                'is_featured' => false
            ]
        );
    }
}
