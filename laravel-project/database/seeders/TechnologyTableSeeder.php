<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technology :: factory() -> count(15) -> create();

        foreach ($technologies as $technology)

        $projects = Project :: inRandomOrder() -> limit(rand(1,5)) -> get();
        // qui abbiamo una lista variabile di tecnologie quindi (?)

        $technology -> projects() -> attach($projects);


    }
}
