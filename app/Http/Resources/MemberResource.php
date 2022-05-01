<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\{Club, Field};
use Creativeorange\Gravatar\Facades\Gravatar;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    // Schema::create('members', function (Blueprint $table) {
    //     $table->bigIncrements('id');
    //     $table->string('name');
    //     $table->string('email')->unique();
    //     $table->string('phone')->unique();
    //     $table->enum('gender',['m','f']);
    //     $table->unsignedInteger('field_id');
    //     $table->unsignedInteger ('club_id');
    //     $table->timestamps();
    // });
     public function toArray($request)
    {
        return [
                 'id'=>$this->id,
                 'name'=>$this->name,
                 'email'=>$this->email,
                 'phone'=>$this->phone,
                 'gender'=>$this->gender,
                 'gravatar'=>Gravatar::get($this->email,['size'=>150]),
                 'field'=>$this->field_id?$this->field->name:'',
                 'club'=>$this->club_id?$this->club->name:'',
                 'rotary_number'=>$this->rotary_number,
        ] ;

    }
}
