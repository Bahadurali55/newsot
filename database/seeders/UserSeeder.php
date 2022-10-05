<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $user1 = User::create([
            'name' => 'Qurban',
            'email' => 'zakar@sot.com',
            'password' => Hash::make('password'),

        ]);
        $user1->assignRole('Admin');


        $user2 = User::create([
            'name' => 'ali',
            'email' => 'jabar@sot.com',
            'password' => Hash::make('password'),

        ]);
        $user2->assignRole('Instructor');
        $user3 = User::create([
            'name' => 'qurban',
            'email' => 'qurban@sot.com',
            'password' => Hash::make('12345678'),

        ]);
        $user3->assignRole('Student');
    }
}