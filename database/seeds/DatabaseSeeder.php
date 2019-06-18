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
        $this->call(HomemusicsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(InterpretersTableSeeder::class);
        $this->call(MedialsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(SongsTableSeeder::class);

    }
}
