<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Maria',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make("12345678"),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Pedro',
                'email'          => 'user1@user1.com',
                'password'       => Hash::make("12345678"),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Jose',
                'email'          => 'user2@user2.com',
                'password'       => Hash::make("12345678"),
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Magdalena',
                'email'          => 'user3@user3.com',
                'password'       => Hash::make("12345678"),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
