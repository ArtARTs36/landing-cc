<?php

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Models\Image;
use Illuminate\Database\Seeder;

/**
 * Class DummySeeder
 */
final class DummySeeder extends Seeder
{
    public function run(): void
    {
        $this->call(GalleryDummySeeder::class);
        $this->call(ImpressionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ExternalAboutUsPostSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PageSeeder::class);
    }
}
