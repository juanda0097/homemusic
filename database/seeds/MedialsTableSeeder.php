<?php

use Illuminate\Database\Seeder;

class MedialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Medial::class,25)->create();
    }
}
