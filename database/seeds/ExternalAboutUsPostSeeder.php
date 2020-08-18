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
        ]);
    }
}
