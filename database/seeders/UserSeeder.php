<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@codecv.com',
            ],
            [
                'name' => Str::random(10),
                'email' => 'admin@codecv.com',
                'password' => Hash::make('CodeCVPass123'),
            ]
        );
    }
}
