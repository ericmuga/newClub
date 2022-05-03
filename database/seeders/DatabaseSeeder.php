<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ZoomController;
use App\Models\{MakeUp,Instance,PhysicalMeeting};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
                  FieldSeeder::class,
                  ClubSeeder::class,
                  UserSeeder::class,
                  MemberSeeder::class,
              ]);

        Instance::factory()->count(50)->create();
        MakeUp::factory()->count(50)->create();
        PhysicalMeeting::factory()->count(20)->create();

        // ZoomController::list_meetings();
    }
}
