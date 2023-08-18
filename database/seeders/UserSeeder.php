<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name'          => 'manager',
            'email'         => 'manager@gmail.com',
            'password'      => 'manager123',
            'user_role_id'  =>  UserRoles::ADMIN->value
        ]);
    }
}
