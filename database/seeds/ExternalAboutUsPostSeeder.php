<?php

use App\Models\ExternalAboutUsPost;
use Illuminate\Database\Seeder;

class ExternalAboutUsPostSeeder extends Seeder
{
    public function run(): void
    {
        $count = 50;

        factory(ExternalAboutUsPost::class, $count)->create();

        $this->command->comment("Create {$count} posts");
    }
}
