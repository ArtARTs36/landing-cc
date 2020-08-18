<?php

use App\Models\ExternalAboutUsPost;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExternalAboutUsPostSeeder extends Seeder
{
    public function run(): void
    {
        ExternalAboutUsPost::query()->create([
            ExternalAboutUsPost::FIELD_TITLE => 'Солнце в капле мёда золотого',
            ExternalAboutUsPost::FIELD_LINK => 'https://communa.ru/obshchestvo/solntse_v_kaple_myeda_zolotogo_/',
            ExternalAboutUsPost::FIELD_PUBLISHED_AT => Carbon::parse('13.08.2018 20:51'),
            ExternalAboutUsPost::FIELD_IMAGE_URL => 'https://communa.ru/upload/photo2018Aug/%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D0%92%D0%B8%D0%BA%D1%82%D0%BE%D1%80.jpg',
        ]);

        ExternalAboutUsPost::query()->create([
            ExternalAboutUsPost::FIELD_TITLE => '«Цветы Черноземья» для школьников',
            ExternalAboutUsPost::FIELD_LINK => 'http://adminknt.ru/2-uncategorised/2195-tsvety-chernozemya-dlya-shkolnikov.html',
            ExternalAboutUsPost::FIELD_PUBLISHED_AT => Carbon::parse('26.12.2018 16:20'),
        ]);

        ExternalAboutUsPost::query()->create([
            ExternalAboutUsPost::FIELD_TITLE => '«Школьный мёд» силы даёт',
            ExternalAboutUsPost::FIELD_LINK => 'https://communa.ru/selskoe_khozyaystvo/shkolnyy-myed-sily-dayet/',
            ExternalAboutUsPost::FIELD_PUBLISHED_AT => Carbon::parse('07.02.2019 18:52'),
            ExternalAboutUsPost::FIELD_IMAGE_URL => 'https://communa.ru/upload/iblock/58e/%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D0%92%D0%B8%D0%BA%D1%82%D0%BE%D1%80.jpg',
        ]);
    }
}
