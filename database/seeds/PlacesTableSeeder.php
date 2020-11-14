<?php

use Illuminate\Database\Seeder;
use App\place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(place::class, 15)->create();
    }
}
