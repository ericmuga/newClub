<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class InstanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /**
         *             $table->id();
            $table->string('uuid')->unique();
            $table->dateTimeTz('start_time')->nullable();
            $table->dateTimeTz('end_time')->nullable();
            $table->timestamps();
         */
        return [
                  'uuid'=>$this->uuid,
                  'start_time'=>$this->start_time,
                  'end_time'=>$this->end_time,
                  'meeting_date'=>Carbon::parse($this->start_time)->toDateString(),
                  'meeting_date_humans'=>Carbon::parse($this->start_time)->diffForHumans(),
                  'type'=>'zoom',
                  'attendees'=>$this->attendees_count(),
                  'identifier'=>'zoom'.$this->id,
                  'icon'=>'zoom',
              ];
    }
}
