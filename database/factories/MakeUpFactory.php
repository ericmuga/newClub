<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MakeUp>
 */
class MakeUpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                   'date'=>Carbon::parse($this->faker->date())->setTimezone('Africa/Nairobi'),
                   'venue'=>$this->faker->city(),
                   'description'=>$this->faker->sentence(),
                   'type'=>$this->faker->randomElement(['club_meeting','project','social']),
                //    'topic'=>$this->faker->randomElement(['Agriculture','Security','Politics','Psychology','Health','Business','Money Matters','Career','Project Management']),
                //    'guest_speaker'=>
        ];
    }
}
