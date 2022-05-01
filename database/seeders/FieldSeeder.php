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
            ['name'=>'Event Management'],
            ['name'=>'Corporate Legal Services'],
            ['name'=>'Law'],
            ['name'=>'Information Technology'],
            ['name'=>'Petroleum Trading'],
            ['name'=>'Education'],
            ['name'=>'Human Resource Management'],
            ['name'=>'Financial Services/Banking'],
            ['name'=>'Marketing'],
            ['name'=>'Accounting/Finance'],
            ['name'=>'Audit'],
            ['name'=>'Investments'],
            ['name'=>'Sales and Marketing'],
            ['name'=>'Research'],
            ['name'=>'Logistics Services'],
            ['name'=>'Construction'],
            ['name'=>'Security'],
            ['name'=>'Medicine'],
            ['name'=>'Supplies and Logistics'],
            ['name'=>'Insurance'],
            ['name'=>'Communications'],
             ['name'=>'Real Estate'],
            ['name'=>'Project Management'],
            ['name'=>'Counselling'],
             ['name'=>'Aviation'],
            ['name'=>'Cleaning Services'],
            ['name'=>'Hospitality'],
            ['name'=>'Energy'],
            ['name'=>'Motor Vehicle Engineering'],
            ['name'=>'Import Services'],
            ['name'=>'Environmental Management'],
            ['name'=>'Architecture'],
            ['name'=>'Photography'],
            ['name'=>'Civil Engineering'],
            ['name'=>'Business Development'],
            ['name'=>'Safety and Quality Assurance'],
            ['name'=>'Public Health'],

        ];
      DB::table('fields')->insert($data);
    }
}
