<?php

use App\Bundles\Impression\Models\Impression;
use Illuminate\Database\Seeder;

class ImpressionSeeder extends Seeder
{
    public function run(): void
    {
        factory(Impression::class, 50)->create();
    }
}
