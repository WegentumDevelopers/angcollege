<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\Feedback::factory(25)->create();
        // \App\Models\Ourteam::factory(25)->create();
        \App\Models\Blog::factory(10)->create();
        \App\Models\Enquiry::factory(15)->create();
        \App\Models\Subscribe::factory(10)->create();
        // \App\Models\Gallery::factory(15)->create();
    }
}
