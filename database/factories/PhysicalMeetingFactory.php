<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhysicalMeeting>
 */
class PhysicalMeetingFactory extends Factory
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
               $table->dateTimeTz('date');
            $table->dateTimeTz('start_time');
            $table->dateTimeTz('end_time');
            $table->string('venue');
            $table->string('guest_speaker');
            $table->string('topic');
            */
            'date'=>Carbon::parse($this->faker->date())->setTimezone('Africa/Nairobi'),
            'start_time'=>Carbon::parse($this->faker->date())->setTimeZone('Africa/Nairobi'),
            'end_time'=>Carbon::parse($this->faker->date())->setTimeZone('Africa/Nairobi'),
            'venue'=>$this->faker->city(),
            'guest_speaker'=>$this->faker->name(),
            'topic'=>$this->faker->randomElement(['Agriculture','Security','Politics','Psychology','Health','Business','Money Matters','Career','Project Management']),
        ];
    }
}
