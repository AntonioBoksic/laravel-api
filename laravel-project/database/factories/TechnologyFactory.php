<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        return [
            'name' => fake() -> randomElement(['Python', 'PHP', 'Java', 'Flutter', 'Laravel', 'Javascript', "Vue"], 1),
            'version' => fake() ->randomElement(['1.0', '1.1', '2.1', '4.1', '3.0', '7.2'], 1),
        ];
        
    }
}
