<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date'=> fake()->date(),
            'shoes_count'=> fake ()->numerify('#'), //pager untuk digit angka
            'price'=> 25000                                                                                      
        ];

    }
}

