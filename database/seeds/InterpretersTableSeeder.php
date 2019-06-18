<?php

use Illuminate\Database\Seeder;

class InterpretersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Interpreter::class,25)->create();
    }
}
