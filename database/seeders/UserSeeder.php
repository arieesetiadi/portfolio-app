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
     */
    public function run(): void
    {
        $user = [
            'username' => 'admin',
            'name' => 'Arie Setiadi',
            'email' => 'ariee.setiadi@gmail.com',
            'phone' => '082146335727',
            'password' => Hash::make('@Arie1212')
        ];

        User::create($user);
    }
}
