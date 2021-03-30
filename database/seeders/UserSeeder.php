<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        //Created Default Users

        User::create([

            'name'      => 'Super Admin',
            'username'  => 'Super Admin',
            'email'     => 'sadmin@gmail.com',
            'phone_number'  => '123456789',
            'password'      => Hash::make('1234'),

        ]);

        User::create([

            'name'      => 'Admin',
            'username'  => 'Admin',
            'email'     => 'admin@gmail.com',
            'phone_number'  => '1234567891',
            'password'      => Hash::make('1234'),

        ]);
    }
}
