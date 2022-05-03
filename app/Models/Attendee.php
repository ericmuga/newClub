<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendee extends Model
{
    use HasFactory;


    protected $fillable=['attendable_type','attendable_id'];

    public function attendable()
    {
        return $this->morphTo();
    }

    public function instances()
    {
        return $this->morphToMany(Instance::class,'attendable');
    }


    public function attend($attendable_type, $attendable_id)
    {
        //an attendee can attend an (instance,make_up etc)
        //this will insert a row in the the attendables table referencing the attendee and the instance
         DB::table('attendables')->insert(['attendee_id'=>$this->id,'attendable_type'=>$attendable_type,'attendable_id'=>$attendable_id]);


    }

    // public function make_ups()
    // {
    //     return $this->morphToMany(MakeUp::class,'attendable');

    // }

    // public function physical_meeeting()
    // {
    //     return $this->morphToMany(PhysicalMeeting::class,'attendable')
    // }


}
