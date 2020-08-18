<?php

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Repositories\ImageRepository;
use Illuminate\Database\Seeder;

/**
 * Class GallerySeeder
 */
final class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $album = Album::create('equipment', 'Оборудование');

        /** @var ImageRepository $repo */
        $repo = app(ImageRepository::class);

        $images = collect();

        //

        $images->push($repo->create('Станок для распечатки рамок, пресс для отжима забруса', 'about-us/6.jpg'));
        $images->push($repo->create('Радиальная медогонка (справа)', 'about-us/5.jpg'));
        $images->push($repo->create('Термо-формовочная линия', 'about-us/3.jpg'));

        //

        $album->images()->attach($images->pluck('id')->toArray());
    }
}
