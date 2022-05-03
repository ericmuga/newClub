<?php

namespace App\Http\Resources;

use App\AttendanceManager;
use Carbon\Carbon;

use Illuminate\Http\Resources\Json\JsonResource;

class MakeUpResource extends JsonResource
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
                    'type'=>'makeup',
                    'attendees'=>AttendanceManager::countAttendeesByType('makeup',$this->id),
                    'identifier'=>'makeup'.$this->id,
                    'icon'=>'makeup'
        ];
    }
}
