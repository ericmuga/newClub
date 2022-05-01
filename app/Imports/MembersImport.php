<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MembersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
                            'name'=>$row['name'],
                            'email'=>$row['email'],
                            'phone'=>$row['phone'],
                            'rotary_number'=>$row['member_id'],
                            'nationality'=>$row['nationality'],
                            'field_id'=>$row['field_id'],
                            'gender'=>$row['gender'],
                            'club_id'=>1
                        ]);
    }
}
