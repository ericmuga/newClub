<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Instance extends Model
{
    use HasFactory;


    public function attendees_count()
    {
        //return $this->morphedByMany(Attendee::class,'attendable');
       //get all attendees for that instance, group by type

       return DB::table('attendables')
                ->where('attendable_type','instance')
                ->where('attendable_id',$this->id)
                ->count();

    }



}
