<?php

namespace Database\Seeders;

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
        $this->call([
            MenuSeeder::class,
            SocialMediaSeeder::class,
            RoleSeeder::class,
            AdminMenuSeeder::class
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Tester',
            'email' => 'tester@yopmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123'),
        ]);
    }
}
