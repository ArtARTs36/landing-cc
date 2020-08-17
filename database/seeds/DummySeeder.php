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
        $this->gallery();
    }

    private function gallery(): void
    {
        $album = Album::create('equipment', 'Оборудование');

        $images = factory(Image::class, 15)->create();

        $album->images()->attach($images);
    }
}
