<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['CategoryName' => 'All']);
        Category::create(['CategoryName' => 'Arts & Music']);
        Category::create(['CategoryName' => 'Biographies']);
        Category::create(['CategoryName' => 'Comics']);
        Category::create(['CategoryName' => 'Computer & Tech']);
        Category::create(['CategoryName' => 'Cooking']);
        Category::create(['CategoryName' => 'History']);
        Category::create(['CategoryName' => 'Horror']);
        Category::create(['CategoryName' => 'Mystery']);
        Category::create(['CategoryName' => 'Romance']);
        Category::create(['CategoryName' => 'Sci-Fi & Fantasy']);
        Category::create(['CategoryName' => 'Sports']);
    }
}
