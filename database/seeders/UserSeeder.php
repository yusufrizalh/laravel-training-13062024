<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(
            [
                [
                    'name' => 'Katrina Smith',
                    'email' => 'katrina.smith@gmail.com',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(15),
                ],
                [
                    'name' => 'Eva Gonzales',
                    'email' => 'eva.gonzales@gmail.com',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(15),
                ],
            ]
        )->each(function ($user) {
            User::create($user);
        });
    }
}
