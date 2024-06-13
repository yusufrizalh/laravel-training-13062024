<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Employee::factory()->count(100)->create();
        $this->call([UserSeeder::class]);

        collect(
            [
                [
                    'name' => 'Yusuf Rizal',
                    'email' => 'rizal@inixindo.co.id',
                    'address' => 'Kemayoran Budidayan 15 Surabaya',
                    'department' => 'Technology',
                    'status' => 1,
                ],
                [
                    'name' => 'Jennifer Rowe',
                    'email' => 'jennifer.rowe@examplemail.com',
                    'address' => 'Jalan Mawar 15 Surabaya',
                    'department' => 'Finance',
                    'status' => 1,
                ],
                [
                    'name' => 'Tania Kehler',
                    'email' => 'yania.kehler@examplemail.com',
                    'address' => 'Jalan Bunga Sepatu 20 Semarang',
                    'department' => 'Finance',
                    'status' => 1,
                ],
            ]
        )->each(function ($employee) {
            Employee::create($employee);
        });
    }
}
