<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::factory()->create([
            "fm" => ["title" => "example", "tags" => ["test1", "test2"]],
        ]);
    }
}
