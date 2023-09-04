<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'id' => 1,
            'name' => 'Men',
        ]);

        ProductCategory::create([
            'id' => 2,
            'name' => 'Women',
        ]);

        ProductCategory::create([
            'id' => 3,
            'name' => 'Fashion',
        ]);

    }
}
