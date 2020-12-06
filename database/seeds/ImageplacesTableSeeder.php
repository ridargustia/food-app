<?php

use Illuminate\Database\Seeder;
use App\imagePlace;

class ImageplacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(imagePlace::class, 50)->create();
    }
}
