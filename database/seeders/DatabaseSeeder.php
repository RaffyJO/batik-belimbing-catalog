<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@batik.com',
            'password' => bcrypt('password'),
        ]);

        $this->call(ProductSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(AwardSeeder::class);
        $this->call(TestimonySeeder::class);
    }
}
