<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        User::create([
            'name' => 'admin',
            'roles' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'user',
            'roles' => 'USER',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);

        User::create([
            'name' => 'writer',
            'roles' => 'WRITER',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('writer')
        ]);
    }
}
