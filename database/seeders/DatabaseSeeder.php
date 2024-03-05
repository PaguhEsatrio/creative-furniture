<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'erik',
            'email' => 'erik@gmail.com',
            'password' => 'erik123'
        ]);

        Post::factory(12)->create();

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
