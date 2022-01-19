<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('manager');
        DB::table('users')->insert([
            'username' => 'Manager',
            'email' => 'manager@manager.com',
            'password' => $password,
            'address' => 'manager',
            'gender' => 'manager',
            'dob' => '2000-01-01',
            'role_id' => '1'
        ]);
    }
}
