<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Experience;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)
            ->has(Profile::factory())
            ->has(Experience::factory())
            ->has(
                Post::factory(1)
                    ->has(Comment::factory(1))
                    ->has(Tag::factory(1), 'tags')
            )
            ->create();
    }
}
