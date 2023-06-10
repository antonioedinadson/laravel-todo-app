<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Task Example',
            'description' => 'Test Task Example'
        ]);
    }
}
