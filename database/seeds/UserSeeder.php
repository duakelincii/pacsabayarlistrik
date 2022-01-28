<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name'      => 'Administrator',
            'username'  => 'sadmin',
            'email'     => 'sadmin@gmail.com',
            'password'  => Hash::make('password'),
            'phone'     => '085157664203',
            'is_admin'  => '1',
            'avatar'    => 'default.jpg',
            'id_tarif'  => '1',
        ]);

        DB::table('users')->insert([
            'name'      => 'User',
            'username'  => 'user',
            'email'     => 'user@gmail.com',
            'password'  => Hash::make('password'),
            'phone'     => '085157664204',
            'is_admin'  => '0',
            'avatar'    => 'default.jpg',
            'id_tarif'  => '1',
        ]);
    }
}
