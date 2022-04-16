<?php

namespace App;

trait Fieldable {

    public function field()
    {

        return $this->belongsTo(Field::class);
    }
}
