<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = array(
            array(
                'id' => '1',
                'name'=>'Suraj',
                'password' => Hash::make('Software@2023'),
                'email' => 'suraj@demo.com',
            
            ),
            array(
                'id' => '2',
                'name'=>'Sunil',
                'password' => Hash::make('Software@2023'),
                'email' => 'sunil@demo.com',
            ),
            array(
                'id' => '3',
                'name'=>'Arjun',
                'password' => Hash::make('Software@2023'),
                'email' => 'arjun@demo.com',
            ),
        );
        
        DB::table('users')->insert($user);
    }
}
