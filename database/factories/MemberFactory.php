<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Field,Club};
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // Schema::create('members', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('phone')->unique();
        //     $table->enum('gender',['m','f']);
        //     $table->unsignedInteger('field_id');
        //     $table->unsignedInteger ('club_id');
        //     $table->timestamps();
        // });
        return [
              'name'=>$this->faker->name(),
              'email'=>$this->faker->unique()->safeEmail(),
              'phone'=>$this->faker->unique()->phoneNumber(),
              'gender'=>$this->faker->randomElement(['m','f']),
              'field_id'=>Field::factory()->create(),
              'club_id'=>Club::factory()->create()


        ];
    }
}
