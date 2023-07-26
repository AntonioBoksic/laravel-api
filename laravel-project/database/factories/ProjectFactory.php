<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> word(),
            'programming_language' => fake() ->randomElement(['Javascript', 'Vue', 'PHP', 'Laravel', 'Java', 'Flutter'], 1),
            'description' => fake() -> paragraph(3),
            'device' => fake() -> randomElement(['IOS', 'Android', 'Desktop', 'Apple Watch'], 1),
        ];
    }
}
