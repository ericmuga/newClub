<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Schema::create('fields', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->unique();
        //     $table->string('description')->nullable();
        //     $table->timestamps();
        // });
        return [
                'name'=>$this->faker->unique()->word(),
                'description'=>$this->faker->sentence(),

        ];
    }
}
