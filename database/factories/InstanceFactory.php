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
            /*
            $table->id();
            $table->unsignedBigInteger('meeting_id');
            $table->string('uuid')->unique();
            $table->dateTimeTz('start_time')->nullable();
            $table->dateTimeTz('end_time')->nullable();
            $table->timestamps();
            */

            'meeting_id'=>$this->faker->numberBetween(1,10000),
            'uuid'=>$this->faker->slug(2),
            'start_time'=>Carbon::parse(date('y-m-d h:m:s'))->timezone('Africa/Nairobi'),
            'end_time'=>Carbon::parse(date('y-m-d h:m:s'))->timezone('Africa/Nairobi'),



        ];
    }
}
