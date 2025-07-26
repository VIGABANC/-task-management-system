<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

/**
 * Task Seeder
 * 
 * Seeds the task table with sample data for development and testing.
 * Follows PSR-12 coding standards and project conventions.
 */
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        try {
            // Check if divisions exist, if not create some
            if (Division::count() === 0) {
                Log::info('No divisions found. Creating sample divisions first.');
                $this->call(DivisionSeeder::class);
            }

            // Get all division IDs
            $divisionIds = Division::pluck('division_id')->toArray();

            if (empty($divisionIds)) {
                Log::error('No divisions available for task seeding.');
                return;
            }

            // Create sample tasks with different states
            $this->createSampleTasks($divisionIds);
            
            Log::info('Task seeding completed successfully.');

        } catch (\Exception $e) {
            Log::error('Error during task seeding: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Create sample tasks with various states.
     *
     * @param array $divisionIds
     * @return void
     */
    private function createSampleTasks(array $divisionIds): void
    {
        // Create regular tasks
        Task::factory(20)->create([
            'division_id' => function () use ($divisionIds) {
                return $divisionIds[array_rand($divisionIds)];
            }
        ]);

        // Create completed tasks
        Task::factory(10)->completed()->create([
            'division_id' => function () use ($divisionIds) {
                return $divisionIds[array_rand($divisionIds)];
            }
        ]);

        // Create overdue tasks
        Task::factory(5)->overdue()->create([
            'division_id' => function () use ($divisionIds) {
                return $divisionIds[array_rand($divisionIds)];
            }
        ]);

        // Create urgent tasks
        Task::factory(8)->urgent()->create([
            'division_id' => function () use ($divisionIds) {
                return $divisionIds[array_rand($divisionIds)];
            }
        ]);

        // Create specific sample tasks for demonstration
        $this->createSpecificSampleTasks($divisionIds);
    }

    /**
     * Create specific sample tasks for demonstration purposes.
     *
     * @param array $divisionIds
     * @return void
     */
    private function createSpecificSampleTasks(array $divisionIds): void
    {
        $sampleTasks = [
            [
                'task_name' => 'Rapport mensuel de performance',
                'description' => 'Préparer et soumettre le rapport mensuel de performance de la division',
                'due_date' => now()->addDays(7),
                'division_id' => $divisionIds[array_rand($divisionIds)],
            ],
            [
                'task_name' => 'Audit de sécurité informatique',
                'description' => 'Effectuer un audit complet de la sécurité informatique',
                'due_date' => now()->addDays(14),
                'division_id' => $divisionIds[array_rand($divisionIds)],
            ],
            [
                'task_name' => 'Formation des employés',
                'description' => 'Organiser une session de formation sur les nouvelles procédures',
                'due_date' => now()->addDays(3),
                'division_id' => $divisionIds[array_rand($divisionIds)],
            ],
            [
                'task_name' => 'Maintenance préventive',
                'description' => 'Effectuer la maintenance préventive des équipements',
                'due_date' => now()->addDays(21),
                'division_id' => $divisionIds[array_rand($divisionIds)],
            ],
            [
                'task_name' => 'Révision des procédures',
                'description' => 'Réviser et mettre à jour les procédures opérationnelles',
                'due_date' => now()->addDays(10),
                'division_id' => $divisionIds[array_rand($divisionIds)],
            ],
        ];

        foreach ($sampleTasks as $taskData) {
            Task::create($taskData);
        }
    }
} 