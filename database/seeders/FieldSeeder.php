<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vo'id'
     */
    public function run()
    {

        $data=[
                                 ['id'=>1,'name'=>'Medicine'],
                                 ['id'=>2,'name'=>'Finance/Accounting'],
                                 ['id'=>3,'name'=>'Structural Engineering'],
                                 ['id'=>4,'name'=>'Information Technology'],
                                 ['id'=>5, 'name'=>'Agriculture'],
                                 ['id'=>6, 'name'=>'Legal'],
                                 ['id'=>7, 'name'=>'Public Service'],
                                 ['id'=>8, 'name'=>'Media/Journalism'],
                                 ['id'=>9, 'name'=>'Education /Training'],
                                 ['id'=>10, 'name'=>'Mechanical and Automotive'],
                                 ['id'=>11, 'name'=>'Security']
        ];
      DB::table('fields')->insert($data);
    }
}
