<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

}
