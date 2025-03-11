<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = User::inRandomOrder()->limit(10)->get()->pluck('id')->toArray();

        Post::factory()
            ->count(10)
            ->owners($owners)
            ->create();
    }
}
