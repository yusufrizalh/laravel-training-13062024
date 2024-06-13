<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $departments = ['Finance', 'Technology', 'FrontOffice', 'Marketing'];
        return [
            'name' => fake()->name,
            'email' => fake()->safeEmail,
            'address' => fake()->address,
            'department_id' => rand(1, 5),
            'status' => rand(0, 1),
        ];
    }
}
