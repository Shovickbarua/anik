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
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'role' => '0',
            'password' => Hash::make('password'),
            'complete'=>'1'
        ]);
        User::create([
            'name' => 'Student',
            'email' => 'stuedent@email.com',
            'role' => '1',
            'password' => Hash::make('password'),
            'complete'=>'1'
        ]);
        User::create([
            'name' => 'Teacher',
            'email' => 'teacher@email.com',
            'role' => '2',
            'password' => Hash::make('password'),
            'complete'=>'1'
        ]);
    }
}
