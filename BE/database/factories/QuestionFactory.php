<?php

namespace Database\Factories;

use App\Models\TestMongoDB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'test_id' => TestMongoDB::factory()->create()->id,
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'score' => 10,
        ];
    }
}
