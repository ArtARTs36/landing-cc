<?php

use App\Models\Event;

class EventSeeder extends \Illuminate\Database\Seeder
{
    public function run(): void
    {
        Event::create('product_update', 'Обновления продукции');
    }
}
