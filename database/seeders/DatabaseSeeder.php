<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Group;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Category::factory(4)->create();
         Color::factory(4)->create();
         Group::factory(4)->create();
         Tag::factory(4)->create();
         User::factory(4)->create();
         Product::factory(10)->create();
         ProductTag::factory(30)->create();
         ColorProduct::factory(22)->create();
    }
}
