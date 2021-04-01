<?php

namespace Database\Factories;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        return [
            'name' => $this->faker->company,
            'id' => $this->faker->unique()->numberBetween(1, $users->count())
        ];
    }
}
