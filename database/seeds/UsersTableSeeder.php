<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Moin Abbas',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '03321773514',
            'address' => 'Room#130, KEMU Doctors Hostel, Hall Road',
            'city' => 'Lahore',
            'user_type' => 'admin',
            'status' => 'approved',
        ]);
    }
}
