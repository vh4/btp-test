<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Learningactivity>
 */
class LearningactivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'metode' => 'Workshop/Self-Learning',
            'januari' => '',
            'februari' => '',
            'maret' => '',
            'april' => '',
            'mei' => '',
            'juni' => '',
        ];
    }
}
