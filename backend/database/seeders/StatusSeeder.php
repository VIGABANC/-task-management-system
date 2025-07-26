<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific statuses for testing
        $statuses = [
            ['statut' => 'pending', 'date_changed' => now(), 'task_id' => 1],
            ['statut' => 'in_progress', 'date_changed' => now(), 'task_id' => 2],
            ['statut' => 'completed', 'date_changed' => now(), 'task_id' => 3],
            ['statut' => 'cancelled', 'date_changed' => now(), 'task_id' => 4],
            ['statut' => 'pending', 'date_changed' => now(), 'task_id' => 5],
        ];

        foreach ($statuses as $status) {
            \App\Models\Status::create($status);
        }

        // Create additional random statuses
        \App\Models\Status::factory(15)->create();
    }
}
