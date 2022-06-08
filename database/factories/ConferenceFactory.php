<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    protected $model = Conference::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'country' => $this->faker->country,
            'date' => '6/08 11:31 AM',
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
        ];
    }
}
