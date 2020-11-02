<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    
     /* The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return[
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),// password
            'remember_token' => Str::random(10),

        ];
    }
    
}

