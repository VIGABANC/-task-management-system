<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RendezvousSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rendezvouses')->insert([
            [
                'date' => Carbon::parse('2025-07-25'),
                'time' => '10:00:00',
                'person' => 'Alice Johnson',
                'subject' => 'Website Redesign',
                'notes' => 'Prepare wireframes and requirements.',
                'admin_id' => 1,
                'superadmin_id' => 1,
            ],
            [
                'date' => Carbon::parse('2025-07-26'),
                'time' => '14:30:00',
                'person' => 'Bob Smith',
                'subject' => 'Marketing Campaign Review',
                'notes' => 'Discuss Q3 campaign results.',
                'admin_id' => 2,
                'superadmin_id' => 1,
            ],
            
        ]);
    }
}
