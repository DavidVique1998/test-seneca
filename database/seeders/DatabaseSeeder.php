<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

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

            User::factory()->create([
             'name' => 'Test User',
             'email' => 'default@example.com',
             'password' => bcrypt('password'),
             'email_verified_at' => Carbon::now('America/Guayaquil'),
             ]);
    }
}
