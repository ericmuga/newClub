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
        Schema::create('attendables', function (Blueprint $table) {
            // $table->id();
            $table->primary(['type','type_id','attendable_id','attendable_type']);
            $table->string('type');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('attendable_id');
            $table->string('attendable_type');
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
        Schema::dropIfExists('attendables');
    }
};
