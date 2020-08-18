<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductDummySeeder extends Seeder
{
    public function run(): void
    {
        factory(Product::class, 50)->create();
    }
}
