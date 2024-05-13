<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\City;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->first()->id,
            "city_id" => City::inRandomOrder()->first()->id,
            "company_id" => Company::inRandomOrder()->first()->id,
            "name" => "API",
            "budget" => "150000.00",
            "execution_date" => now(),
            "is_active" => true,
        ];
    }
}
