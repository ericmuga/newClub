<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    protected $fillable=['start_time','uuid','meeting_id'];



    public function guests()
    {
        return $this->morphMany(Guest::class,'attendable')->withTimestamps();

    }
}
