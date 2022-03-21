<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'phone'=>$this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'address'=>$this->faker->address,
            'manager'=>$this->faker->name,
            'status_id'=>Status::all()->random()->id,
        ];
    }
}
