<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'User',
            ],
            [
                'id'    => 3,
                'title' => 'Customer',
            ],
            [
                'id'    => 4,
                'title' => 'Super Admin',
            ],
        ];

        Role::insert($roles);
    }
}