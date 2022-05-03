<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalMeeting extends Model
{
    use HasFactory;

    protected $fillable=['guest_speaker','topic','date','start_time','end_time','venue'];


}
