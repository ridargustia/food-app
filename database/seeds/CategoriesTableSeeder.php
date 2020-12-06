<?php

use Illuminate\Database\Seeder;
use App\category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name' => 'Kuliner'
        ]);

        category::create([
            'name' => 'Kerajinan'
        ]);

        category::create([
            'name' => 'Wisata'
        ]);
    }
}
