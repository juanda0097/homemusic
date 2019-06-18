<?php

use Illuminate\Database\Seeder;

class HomemusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Homemusic::class,25)->create();
    }
}
