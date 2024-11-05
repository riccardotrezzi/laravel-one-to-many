<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Model
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        $projects = config('projects');

        foreach ($projects as $oldProject){
            $project = new Project();
            $project->title = $oldProject['title'];
            $project->description = $oldProject['description'];
            $project->img = $oldProject['img'];
            $project->project_date = $oldProject['project_date'];
            $project->project_type = $oldProject['project_type'];
            $project->save();
        }
    }
}
