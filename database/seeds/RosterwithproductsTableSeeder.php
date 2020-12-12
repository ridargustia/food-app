<?php

use Illuminate\Database\Seeder;
use App\rosterWithProduct;

class RosterwithproductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(rosterWithProduct::class, 50)->create();
    }
}
