<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    use \App\Contactable;
    use \App\Fieldable;
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

        protected $fillable=['name','email','phone','gender','field_id','club_id','rotary_number'];


        public function club()
        {
            return $this->belongsTo(Club::class);
        }








}
