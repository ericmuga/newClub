<?php

namespace App\Observers;

use App\Models\{Guest,Attendee};

class GuestObserver
{
    /**
     * Handle the Guest "created" event.
     *
     * @param  \App\Models\Guest  $guest
     * @return void
     */
    public function created(Guest $guest)
    {
        //

        // Attendee::create(['attendable_id'=>$guest->id,'attendable_type'=>'guest']);
    }

    /**
     * Handle the Guest "updated" event.
     *
     * @param  \App\Models\Guest  $guest
     * @return void
     */
    public function updated(Guest $guest)
    {
        //
    }

    /**
     * Handle the Guest "deleted" event.
     *
     * @param  \App\Models\Guest  $guest
     * @return void
     */
    public function deleted(Guest $guest)
    {
        //
        // Attendee::where('attendable_type','guest')
        //         ->where('attendable_id',$guest->id)
        //         ->delete();
    }

    /**
     * Handle the Guest "restored" event.
     *
     * @param  \App\Models\Guest  $guest
     * @return void
     */
    public function restored(Guest $guest)
    {
        //
    }

    /**
     * Handle the Guest "force deleted" event.
     *
     * @param  \App\Models\Guest  $guest
     * @return void
     */
    public function forceDeleted(Guest $guest)
    {
        //
    }
}
