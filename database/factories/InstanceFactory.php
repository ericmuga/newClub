<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instance>
 */
class InstanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /**
             * $table->id();
            $table->string('uuid')->unique();
            $table->dateTimeTz('start_time')->nullable();
            $table->dateTimeTz('end_time')->nullable();
            $table->timestamps();
             */
              'uuid'=>$this->faker->unique()->uuid(),
              'start_time'=>Carbon::parse($this->faker->date())->setTimeZone('Africa/Nairobi'),
              'end_time'=>carbon::parse($this->faker->date())->setTimeZone('Africa/Nairobi'),

            ];

    }
}
