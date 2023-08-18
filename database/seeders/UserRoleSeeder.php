<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin',
                'description' => 'admin',
            ],
            [
                'id' => 2,
                'name' => 'Work Shop',
                'description' => 'work shop',
            ],
            [
                'id' => 3,
                'name' => 'Shop',
                'description' => 'shop',
            ]
        ];

        foreach ($roles as $role) {
            UserRole::query()->updateOrCreate(['description' => $role['description']], $role);
        }

    }
}
