<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Task;
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
        $this->call([
            UserSeeder::class,
            // CategorySeeder::class,
            // TaskSeeder::class
        ]);
        
        User::factory(40)->create();
        Category::factory(10)->create();
        Task::factory(10)->create();
    }
}
