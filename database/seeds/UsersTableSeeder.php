<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            [   'name' => 'GoldTop',
                'username' => 'nonstop',
                'password' => bcrypt('123456'),
                'image' => 'null',
                'email' => 'nonstop@hotmail.com',
                'tel' => '0898115155',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'role_id' => '1'],
            [   'name' => 'GoldTon',
                'username' => 'nonston',
                'password' => bcrypt('123456'),
                'image' => '',
                'email' => 'nonston@hotmail.com',
                'tel' => '0899999999',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'role_id' => '1'],
            [   'name' => 'MemberKai',
                'username' => 'kookkai',
                'password' => bcrypt('123456'),
                'image' => '',
                'email' => 'kookkai@hotmail.com',
                'tel' => '0895072549',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'role_id' => '2'],
        ]);
    }
}