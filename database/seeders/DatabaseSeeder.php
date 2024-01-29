<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(3)->create();

        category::create([
            'name' => 'Living Room',
            'slug' => 'living-room'
        ]);
    
        category::create([
            'name' => 'Bedroom',
            'slug' => 'Bedroom'
        ]);
    
        category::create([
            'name' => 'Dining Room',
            'slug' => 'dining-room'
        ]);

        category::create([
            'name' => 'Project Cafe',
            'slug' => 'project-cafe'
        ]);
    
    }
}
