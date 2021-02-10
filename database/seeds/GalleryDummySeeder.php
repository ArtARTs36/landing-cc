<?php

use App\Bundles\Gallery\Models\Image;
use App\Bundles\Gallery\Repositories\AlbumRepository;
use Illuminate\Database\Seeder;

class GalleryDummySeeder extends Seeder
{
    public function run(): void
    {
        $album = app(AlbumRepository::class)->create('equipment', 'Оборудование');

        $images = factory(Image::class, 15)->create();

        $album->images()->attach($images);
    }
}
