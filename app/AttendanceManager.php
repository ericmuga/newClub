<?php

namespace App;

use Illuminate\Support\Facades\DB;

class AttendanceManager
{


    /* how many attendees (of a given type) attended a given attendable returns int */
    public static function countAttendance($attendable_type, $attendable_id, $attendeeType = null)
    {
        # code...
        return DB::table('attendance')
            ->where('attendable_type', $attendable_type)
            ->where('attendable_id', $attendable_id)
            ->when($attendeeType, fn ($q, $attendeeType) => $q->whereIn('attendee_type', $attendeeType))
            ->count();
    }

     /* how many attendees per type attended a given attendable returns array */
    public static function countAttendeesByType($attendable, $attendable_id, $attendee_type = null)
    {
         $collection=DB::table('attendance')
                ->where('attendable_type', $attendable)
                ->where('attendable_id', $attendable_id)
                ->when($attendee_type, fn ($q, $attendee_type) => $q->whereIn('attendee_type', $attendee_type))
                ->select('attendee_type', DB::raw('count(*) as count'))
                ->groupBy('attendee_type')->get();
        return $collection->count()==0?collect(['members'=>0,'guests'=>0]):$collection;
    }


    /*how many meetings (of a given type) has an attendee attended, returns array */
    public static function countMeetingsByType($attendee_type, $attendee_id, $attendable_type = null)
    {
        $collection= DB::table('attendance')
            ->where('attendee_type', $attendee_type)
            ->where('attendee_id', $attendee_id)
            ->when($attendable_type, fn ($q, $attendable_type) => $q->whereIn('attendable_type', $attendable_type))
            ->select('attendable_type', DB::raw('count(*) as count'))
            ->groupBy('attendable_type')->get();

         return $collection->count()==0?collect(['zoom'=>0,'makeup'=>0,'physical'=>0]):$collection;
    }
}
