<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    use \App\Contactable;
    use \App\Fieldable;



    public function attendee()
    {
        return $this->morphOne(Attendee::class,'attendable');
    }
}
