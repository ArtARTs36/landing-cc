<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExternalAboutUsPostSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
