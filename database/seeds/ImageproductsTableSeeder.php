<?php

use Illuminate\Database\Seeder;
use App\imageProduct;

class ImageproductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(imageProduct::class, 10)->create();
    }
}
