<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_meetings', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->dateTimeTz('start_time');
            $table->dateTimeTz('end_time');
            $table->string('venue');
            $table->string('guest_speaker');
            $table->string('topic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical_meetings');
    }
};
