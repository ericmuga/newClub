<?php

namespace Tests\Feature;

use App\Models\Instance;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     use RefreshDatabase;

 public function an_instance_can_be_attended()
 {
   $instance =Instance::factory()->create();

   $instance->attend();
   $this->assertCount(1,$instance->attendees);

 }
}
