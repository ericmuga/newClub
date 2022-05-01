<?php

namespace App;
use App\Models\Field;

trait Fieldable {

    public function field()
    {

        return $this->belongsTo(Field::class);
    }
}
