<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'name' => 'Test Product',
            'price' => '120',
            'product_category_id' => 1,
        ]);
        Product::create([
            'id' => 2,
            'name' => 'Fashion Product',
            'price' => '120',
            'product_category_id' => 2,
        ]);
        Product::create([
            'id' => 3,
            'name' => 'Women Product',
            'price' => '120',
            'product_category_id' => 3,
        ]);
    }
}
