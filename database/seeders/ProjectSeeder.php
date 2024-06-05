<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();

            $name = $faker->sentence(5);

            $project->name = $name;
            $project->slug = Str::slug($name);
            $project->description = $faker->optional()->text(250);
            $project->link = $faker->url();

            $project->save();
        }
    }
}
