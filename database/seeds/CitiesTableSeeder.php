<?php

use Illuminate\Database\Seeder;
use App\city;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        city::create([
            'province_id' => 1,
            'name' => 'Bantul'
        ]);

        city::create([
            'province_id' => 1,
            'name' => 'Gunungkidul'
        ]);

        city::create([
            'province_id' => 1,
            'name' => 'Kulon Progo'
        ]);

        city::create([
            'province_id' => 1,
            'name' => 'Sleman'
        ]);

        city::create([
            'province_id' => 1,
            'name' => 'Kota Yogyakarta'
        ]);
    }
}
