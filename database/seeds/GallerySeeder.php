<?php

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Repositories\AlbumRepository;
use App\Bundles\Gallery\Repositories\ImageRepository;
use Illuminate\Database\Seeder;

/**
 * Class GallerySeeder
 */
final class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $this->equipment();
        $this->awards();
    }

    private function awards(): void
    {
        $album = app(AlbumRepository::class)->create('awards', 'Награды');

        /** @var ImageRepository $repo */
        $repo = app(ImageRepository::class);

        $images = collect();

        //

        $images->push(
            $repo->create(
                'Кантемировский муниципальный район, Лидер с/х производства 2019 г',
                'awards/9.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Победа в номинации "Инновационный прорыв". Кантемировский муниципальный район',
                'awards/12.jpeg'
            )
        );

        $images->push($repo->create('Кантемировский муниципальный район, "День с/х работника"', 'awards/1.jpeg'));
        $images->push($repo->create('Грамота за добросовестный труд в системе агропромышленного комплекса', 'awards/16.jpeg'));

        $images->push(
            $repo->create(
                'Грамота за добросовестный труд и качественную организацию продукции пчеловодства',
                'awards/15.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Благодарность за разведение пчел и достижение высоких показателей в производстве валового и товарного вида в КФХ',
                'awards/14.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Грамота за высокие показатели в сельскохозяйственной продукции, весомый вклад в развитие агропромышленного комплекса',
                'awards/6.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Грамота за многолетний добросовестный труд в отрасли пчеловодства, получение товарной продукции',
                'awards/11.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Благодарность за активное участие в жизни села. Администрация Писаревского сельского поселения',
                'awards/13.jpeg'
            )
        );

        $images->push(
            $repo->create(
                'Грамота за оказанную помощь в организации новогодних праздников. Администрация Писаревского сельского поселения',
                'awards/10.jpeg'
            )
        );

        //

        $album->images()->attach($images->pluck('id')->toArray());
    }

    private function equipment(): void
    {
        $album = app(AlbumRepository::class)->create('equipment', 'Оборудование');

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
