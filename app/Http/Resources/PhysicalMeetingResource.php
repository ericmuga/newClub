<?php

namespace App\Http\Resources;

use App\AttendanceManager;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
class PhysicalMeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [


            'uuid'=>'',
            'start_time'=>Carbon::parse($this->date)->toDateTimeString(),
            'end_time'=>Carbon::parse($this->date)->toDateTimeString(),
            'meeting_date'=>Carbon::parse($this->date)->toDateString(),
            'meeting_date_humans'=>Carbon::parse($this->date)->diffForHumans(),
            'type'=>'physical_meeting',
            'attendees'=>AttendanceManager::countAttendeesByType('physical_meeting',$this->id),//$this->attendees_count(),
            'identifier'=>'physical'.$this->id,
            'icon'=>'physicalmeeting'
        ];
    }
}
