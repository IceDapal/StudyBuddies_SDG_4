<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@studybuddies.com',
            'password'=>Hash::make('12345678')
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@studybuddies.com',
            'password'=>Hash::make('12345678')
        ]);

    }
}
