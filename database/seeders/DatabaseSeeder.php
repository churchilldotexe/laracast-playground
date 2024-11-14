<?php

namespace Database\Seeders;

use App;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Job::factory(100)->create();
        Tag::factory()->create();
        $tag = Tag::query()->find('1');
        $tag->jobs()->attach(['2','3','6','11','23']);
    }
}
