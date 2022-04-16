<?php

namespace App;

trait Contactable {
    public function contacts()
    {
        return $this->morphMany(Contact::class,'contactable');
    }
}
