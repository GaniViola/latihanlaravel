<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $category = ['Traveling', 'Web Programming', 'City Light', 'City'];
        $FakeCategory = fake()->unique()->randomElement($category);
        
        return [
            'name' => $FakeCategory,
            'slug' => Str::slug($FakeCategory)
        ];
    }
}
