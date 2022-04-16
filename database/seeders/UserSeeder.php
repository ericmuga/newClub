<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User,Contact};
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::create([

            'name'=>'Eric Muga',
            'email'=>'eric.muga@gmail.com',
            'password'=>bcrypt('Microsoft2022$'),
            'field_id'=>4,
            'phone'=>'0720816931'
        ]);
       DB::table('contacts')->insert([
           'contact_type'=>'email',
           'contactable_type'=>'App\Models\User',
           'contactable_id'=>$user->id,
           'contact'=>'eric.muga@gmail.com'
           ]);

         DB::table('contacts')->insert([
           'contact_type'=>'phone',
           'contactable_type'=>'App\Models\User',
           'contactable_id'=>$user->id,
           'contact'=>'0720816931'
           ]);




    }
}
