<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Field;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
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
             $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->enum('gender',['m','f']);
            $table->enum('type',['rotarian','rotaractor','guest','prospective_inductee']);
            $table->unsignedInteger('field_id');
            $table->unsignedInteger ('club_id');
            $table->timestamps();
             */

             'name'=>$this->faker->name(),
             'email'=>$this->faker->email(),
             'phone'=>$this->faker->phoneNumber(),
             'gender'=>$this->randomElement(['f','m']),
             'type'=>$this->randomElement(['rotarian','rotaractor','guest','prospective_inductee']),
             'field_id'=>fn()=>Field::factory()->create()->id,
             'club_id'=>fn()=>Club::factory()->create()->id,
        ];
    }
}
