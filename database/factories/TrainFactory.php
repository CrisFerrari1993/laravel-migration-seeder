<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => fake() -> word(),
            'departure_station' => fake() -> word(),
            'arrival_station' => fake() -> word(),
            'departure_date' => fake() -> date(),
            'departure_time' => fake() -> time(),
            'arrival_time' => fake() -> time(),
            'train_code' => fake() -> randomNumber(5, true),
            'carriage_num' => fake() -> randomNumber(5, true),
            'in_time' => fake() -> boolean(),
            'cancelled' => fake() -> boolean()
        ];
    }
}
