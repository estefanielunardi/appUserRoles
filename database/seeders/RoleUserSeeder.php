<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    
    public function run()
    {
        User::findOrFail(4)->roles()->attach(4);
        User::findOrFail(4)->roles()->attach(5);
        User::findOrFail(4)->roles()->attach(6);
        User::findOrFail(1)->roles()->attach(4);
        User::findOrFail(1)->roles()->attach(5);
        User::findOrFail(2)->roles()->attach(2);
        User::findOrFail(2)->roles()->attach(1);
        User::findOrFail(3)->roles()->attach(3);
        
    }
}
